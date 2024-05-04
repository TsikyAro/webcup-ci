<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class AccountModel extends CI_Model
    {
        public function insertion_utilisateur($nom,$motDePasse){
            $data = array();
            $data['nom'] = $nom;
            $data['motdepasse'] = $motDePasse;
            $this->db->insert('utilisateur', $data);
            return $this->db->insert_id();
        }
      
    
    }
?>