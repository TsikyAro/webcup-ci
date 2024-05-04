<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct()
	{
        parent::__construct();
        $this->load->model('UtilisateurModel');
    }

    public function index(){
        redirect(site_url('adminprocess'));
    }

    public function login(){
        // $this->session->sess_destroy();
        $this->load->view('pages/login_admin');
    }

    public function login_process(){
        if ($this->session->admin) {
            redirect(site_url('admin/login'));
		}
		$data= [];
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/login_admin');
		} else {
            $data = $this->UtilisateurModel->login_admin($this->input->post('pseudo'), $this->input->post('password'));
            if ($data) {
				$this->session->set_userdata('admin', $data);
				redirect(site_url('adminprocess'));
			} else {
				$this->session->set_flashdata('message', 'Pseudo or Password is incorrect !');
				$this->load->view('pages/login_admin');
			}
		}
    }

    public function logout(){
        if ($this->session->userdata('admin')) {
			$this->load->library('session');
			$this->session->unset_userdata('admin');
		}
		$this->session->set_flashdata('message', 'Logout successfully !');
		redirect(site_url('admin/login'));
    }
}
?>