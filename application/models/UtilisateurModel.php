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
            $query = $this->db->get_where('utilisateur', array('pseudo' => $email, 'motdepasse' => $password));
            return $query->row();
        }

        public function insert($data)
        {
            $this->db->insert('utilisateur', $data);
        }
        public function insertion_utilisateur_niveau($idniveau,$idutilisateur,$idcourstermine){
            $data = array(
                'idniveau'=>$idniveau,
                'idutilisateur'=>$idutilisateur,
                'idcourstermine'=>$idcourstermine
            );
            $this->db->insert('utilisateur_niveau', $data);
            return $this->db->insert_id();
        }
    
    }
?>