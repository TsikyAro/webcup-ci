create or replace view dernier_utilisateur_niveau as 
    SELECT id, idutilisateur, idniveau, idcourstermine
    FROM (
        SELECT id, idutilisateur, idniveau, idcourstermine,
            ROW_NUMBER() OVER (PARTITION BY idutilisateur ORDER BY id DESC) AS row_num
        FROM utilisateur_niveau
    ) sub
    WHERE row_num = 1;

create or replace view cours_utilisateur as 
    select ordre,titre,dn.idcourstermine,dn.idutilisateur from cours cross join dernier_utilisateur_niveau dn ;


create or replace view cours_utilisateur_indice as
select ordre,titre,idcourstermine,idutilisateur,
    CASE 
        WHEN ordre > idcourstermine+1 THEN '10'
        WHEN ordre = idcourstermine+1 THEN '5'
        WHEN ordre < idcourstermine+1 THEN '0'
    END as indice
from cours_utilisateur;

create or replace view resultat_qcm as
select qru.*,qc.question,qr.reponse,qc.idcours from qcm_reponse_utilisateur qru 
    join qcm_cours qc on  qru.idqcmcours = qc.id 
    join qcm_reponse qr on qr.idquestion=qru.idqcmcours  ; 



create or replace view cours_actuel_utilisateur as 
SELECT 
    utilisateur.id, 
    COALESCE(utilisateur_niveau.idcourstermine, 0) AS idcourstermine
FROM 
    utilisateur
LEFT JOIN 
    (
        SELECT 
            idutilisateur, 
            MAX(idcourstermine) AS idcourstermine
        FROM 
            utilisateur_niveau
        GROUP BY 
            idutilisateur
    ) AS utilisateur_niveau_max
ON 
    utilisateur.id = utilisateur_niveau_max.idutilisateur
LEFT JOIN 
    utilisateur_niveau 
ON 
    utilisateur.id = utilisateur_niveau.idutilisateur AND 
    utilisateur_niveau.idcourstermine = utilisateur_niveau_max.idcourstermine;


CREATE OR REPLACE VIEW cours_par_user as
SELECT 
    utilisateur.id AS id_utilisateur,
    utilisateur.pseudo AS pseudo_utilisateur,
    cours.*,
    CASE
        WHEN utilisateur_niveau.idcourstermine IS NOT NULL THEN 'Terminé'
        WHEN utilisateur_prochain_cours.prochain_cours IS NOT NULL THEN 'En cours'
        ELSE 'Non terminé'
    END AS etat_cours
FROM 
    utilisateur
CROSS JOIN 
    cours
LEFT JOIN 
    (
        SELECT 
            idutilisateur, 
            idcourstermine
        FROM 
            utilisateur_niveau
    ) AS utilisateur_niveau
ON 
    utilisateur.id = utilisateur_niveau.idutilisateur AND cours.id = utilisateur_niveau.idcourstermine
LEFT JOIN 
    (
        SELECT 
            idutilisateur,
            MIN(idcourstermine) AS prochain_cours
        FROM 
            utilisateur_niveau
        WHERE
            idcourstermine > (
                SELECT 
                    MAX(idcourstermine)
                FROM 
                    utilisateur_niveau AS un
                WHERE 
                    un.idutilisateur = utilisateur_niveau.idutilisateur
            ) OR idcourstermine IS NULL
        GROUP BY
            idutilisateur
    ) AS utilisateur_prochain_cours
ON 
    utilisateur.id = utilisateur_prochain_cours.idutilisateur
    ORDER BY cours.ordre;


CREATE OR REPLACE VIEW qcm_avec_les_bonnes_reponses AS
SELECT qcm_cours.*, qcm_reponse.id AS id_reponse, qcm_reponse.reponse AS bonne_reponse FROM qcm_cours LEFT JOIN qcm_reponse ON qcm_cours.id = qcm_reponse.idquestion AND qcm_reponse.type = 1;



CREATE OR REPLACE VIEW qcm_note as 

SELECT qcm_vue.idcours, qcm_vue.question, qcm_vue.bonne_reponse, qcm_reponse_utilisateur.reponseutilisateur AS reponse_utilisateur, qcm_reponse_utilisateur.idutilisateur FROM qcm_avec_les_bonnes_reponses as qcm_vue LEFT JOIN qcm_reponse_utilisateur ON qcm_vue.id = qcm_reponse_utilisateur.idqcmcours;

CREATE OR REPLACE VIEW Vue_Utilisateurs_Niveau AS
SELECT utilisateur.nom AS Nom_Utilisateur, COALESCE(utilisateur_niveau.idniveau,0) AS Niveau_Utilisateur
FROM utilisateur
LEFT JOIN utilisateur_niveau ON utilisateur.id = utilisateur_niveau.idutilisateur
where isadmin = false;

CREATE OR REPLACE VIEW Vue_Utilisateurs_Par_Niveau AS
SELECT n.id AS id_niveau, n.nom AS nom_niveau, COALESCE(COUNT(u.id), 0) AS nombre_utilisateurs
FROM niveau n
LEFT JOIN utilisateur_niveau un ON n.id = un.idniveau
LEFT JOIN utilisateur u ON un.idutilisateur = u.id
GROUP BY n.id;

