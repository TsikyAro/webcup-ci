<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class UtilisateurModel extends CI_Model
    {
        public function insertion_utilisateur($nom,$motDePasse){
            $data = array();
            $data['nom'] = $nom;
            $data['motdepasse'] = $motDePasse;
            $this->db->insert('utilisateur', $data);
            return $this->db->insert_id();
        }
      
        public function login($email, $password)
        {
            $query = $this->db->get_where('utilisateur', array('pseudo' => $email, 'motdepasse' => $password, 'isadmin' => false));
            return $query->row();
        }

        public function login_admin($email, $password)
        {
            $query = $this->db->get_where('utilisateur', array('pseudo' => $email, 'motdepasse' => $password, 'isadmin' => true));
            return $query->row();
        }

        public function insert($data)
        {
            $this->db->insert('utilisateur', $data);
        }
    
    }
?>