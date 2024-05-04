<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CoursModel extends CI_Model{
    public function get_all_cours(){
        $query = $this->db->get('cours');
            return $query->result();
    }
    public function get_cours($ordre){
        $query = $this->db->get_where('ordre',array('idcours' => $ordre));
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
}