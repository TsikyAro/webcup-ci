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