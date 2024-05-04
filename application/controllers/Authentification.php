<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentification extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function template($page, $data)
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/authentification/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
	public function signin()
	{
		$data['teams'] = 'CodeForce';

		$this->template('signin', $data);
	}

	public function signup()
	{
		$data['teams'] = 'CodeForce';

		$this->template('signup', $data);
	}

	public function login(){
		if ($this->session->user) {
			redirect(site_url('welcome/index'));
		}
		$this->form_validation->set_rules('email', 'Utilisateur', 'required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pages/login.php');
		} else {
			$data = $this->user->login($this->input->post('email'), $this->input->post('password'));
			if ($data) {
				$this->session->set_userdata('user', $data);
				redirect(site_url('welcome/index'));
			} else {
				$data['msg'] = 'E-mail ou Mot de passe incorrect!';
				$this->load->view('pages/login.php', $data);
			}
		}
	}
}