<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoursModel extends CI_Model{
    public function get_all_cours(){
        $query = $this->db->get('cours');
            return $query->result();
    }
    public function get_all_cours_indice($user){
        $query = $this->db->get_where('cours_utilisateur_indice',array('idutilisateur' => $user));
            return $query->result();
    }

    public function get_cours_user($user){
        $query = $this->db->get_where('cours_par_user',array('id_utilisateur' => $user));
            return $query->result();
    }
    public function get_cours_indice($idcours){
        $query = $this->db->get_where('cours_utilisateur_indice',array('idcourstermine' => $idcours));
            return $query->result();
    }
    public function get_niveau($cours){
        $query = $this->db->get_where('cours',array('id' => $cours));
            return $query->row();
    }
    public function get_cours($ordre){
        $query = $this->db->get_where('cours',array('idcours' => $ordre));
            return $query->row();
    }
    public function get_cours_by_id($id){
        $query = $this->db->get_where('cours',array('id' => $id));
            return $query->row();
    }
    public function get_qcm_pour_un_cours($cours){
        $query = $this->db->get_where('qcm',array('idcours' => $cours));
            return $query->result();
    }

    public function get_trois_cours_random(){
        $this->db->order_by('RAND()');
        $this->db->limit(3);
        $query = $this->db->get('cours');
        return $query->result();
    }

    public function get_cours_from_me(){
        $query = $this->db->get('cours');
            return $query->result();
    }
}