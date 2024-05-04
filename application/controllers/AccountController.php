<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AccountController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
    }

    public function nouvelle_utilisateur()
    {
        $username = $this->input->post('nom');
        $password = $this->input->post('motdepasse');
        $signin = $this->AccountModel->insert_user_account($username,$password);
        $this->load->view('autentifications/Login');
    }
}
?>