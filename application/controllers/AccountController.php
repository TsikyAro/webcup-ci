<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AccountController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AccountModel');
    }

    public function new_account()
    {
        $username = $this->input->post('name');
        $mail = $this->input->post('email');
        $password = $this->input->post('password');
        $signin = $this->AccountModel->insert_user_account($username,$mail,$password);
        $this->load->view('autentifications/Login');
    }
}
?>