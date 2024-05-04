<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AutentificationModel extends CI_Model{
    public function autentification($nom,$motdepasse){
        $data = array();
        $sql = "select * from utilisateur where nom = '".$nom."' and motsdepasse = '".$motdepasse."'";
        $query = $this->db->query($sql);
        if (!$query) {
            throw new Exception('The code you are referencing is already used');
        } else {
            $data =  $query->result()[0];
        }
        return $data;
    }

}
