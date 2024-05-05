<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QcmReponseModel extends CI_Model{
    public function get_by_id_question($idquestion){
        $query = $this->db->get_where('qcm_reponse', array('idquestion'=>$idquestion));
            return $query->result();
    }
    public function insert($data)
    {
        $this->db->insert('qcm_reponse_utilisateur', $data);
    }

    public function delete($data)
    {
        $this->db->delete('qcm_reponse_utilisateur', $data);
    }
    public function insert_qcm_reponse($idquestion,$reponse,$idutilisateur){
        $data = array();
        $data['idqcmcours'] = $idquestion;
        $data['reponseutilisateur'] = $reponse;
        $data['idutilisateur'] = $idutilisateur;
        $this->db->insert('qcm_reponse_utilisateur', $data);
        return $this->db->insert_id();
    }
    public function get_resultat_qcm($idcours,$utilisateur){
        $query = $this->db->get_where('resultat_qcm', array('idcours'=>$idcours,'idutilisateur'=>$utilisateur));
            return $query->result();
    }
    public function checknote($tableau_resultat){
       for($i =0; $i<count($tableau_resultat);$i++){
            if($tableau_resultat[$i]->reponseutilisateur == $tableau_resultat[$i]->bonne_reponse){
                $tableau_resultat[$i]->note = 10;
            }else{
                $tableau_resultat[$i]->note = 0;
            }
       }
       return $tableau_resultat;
    }
}