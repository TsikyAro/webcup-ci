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
}