<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ResultatModel extends CI_Model {
    public function getresultat($idcours,$idutilisateur) {
        $this->db->select('*');
        $this->db->from('qcm_avec_les_bonnes_reponses q');
        $this->db->join('qcm_reponse_utilisateur u', 'q.id = u.idqcmcours');
        $this->db->where('u.idutilisateur', $idutilisateur);
        $this->db->where('q.idcours', $idcours); // Condition supplémentaire pour l'id du cours

        // Exécution de la requête et récupération des résultats
        $query = $this->db->get();
        return $query->result();
    }
}
?>