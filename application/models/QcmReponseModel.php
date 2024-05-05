<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QcmReponseModel extends CI_Model{
    public function get_by_id_question($idquestion){
        $query = $this->db->get_where('qcm_reponse', array('idquestion'=>$idquestion));
            return $query->result();
    }
}