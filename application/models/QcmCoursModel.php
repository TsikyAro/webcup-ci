<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QcmCoursModel extends CI_Model{
    public function get_by_id_cours($idcours){
        $query = $this->db->get_where('qcm_cours', array('idcours'=>$idcours));
            return $query->result();
    }


    public function count_qcm() {
        return $this->db->count_all_results('qcm_cours');
    }

    
    

}