<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NiveauModel extends CI_Model{
    public function get_all_niveau(){
        $query = $this->db->get('niveau');
            return $query->result();
    }
}