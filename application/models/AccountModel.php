<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class AccountModel extends CI_Model
    {
        public function insert_user_account($nom,$email,$motDePasse)
        {
            $data = array();
            $data['name'] = $nom;
            $data['password'] = $motDePasse;
            $data['email'] = $email;
            $this->db->insert('user_account', $data);
            return $this->db->insert_id();
        }
        public function insert_user_account_detail($id_user,$taille,$poid)
        {
            $data = array();
            $data['id_user'] = $id_user;
            $data['taille'] = $taille;
            $data['poid'] = $poid;
            $this->db->insert('user_about', $data);
            return $this->db->insert_id();
        }
        public function lastInsription(){
            $data = array();
            $sql = "select * from user_account order by id desc limit 1";
            $query = $this->db->query($sql);
            if (!$query) {
                throw new Exception('The code you are referencing is already used');
            } else {
                foreach ($query->result_array() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        }
    
    }
?>