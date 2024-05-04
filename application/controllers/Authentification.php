<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentification extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('UtilisateurModel');
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
			redirect(site_url('coursonline'));
		}
		$data= [];
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->template('signin',$data);
		} else {
			$data = $this->UtilisateurModel->login($this->input->post('pseudo'), $this->input->post('password'));
			if ($data) {
				$this->session->set_userdata('user', $data);
				redirect(site_url('coursonline'));
			} else {
				$this->session->set_flashdata('message', 'Pseudo or Password is incorrect !');
				$this->template('signin',$data);
			}
		}
	}

	public function logout()
	{
		if ($this->session->userdata('user')) {
			$this->load->library('session');
			$this->session->unset_userdata('user');
		}
		$this->session->set_flashdata('message', 'Logout successfully !');
		redirect(site_url('authentification/login'));
	}

	public function inscription()
	{

		$this->form_validation->set_rules('name', 'Utilisateur', 'required');
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
		$this->form_validation->set_rules('nom', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prenom', 'required');
		$this->form_validation->set_rules('genre', 'Genre', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/connexion/header');
			$this->load->view('pages/connexion/inscription');
			$this->load->view('templates/connexion/footer');
		} else {
			$utili = array(
				'nom' => $this->input->post('nom'),
				'prenom' => $this->input->post('prenom'),
				'email' => $this->input->post('email'),
				'mdp' => $this->input->post('mdp'),
				'genre' => $this->input->post('prenom'),
				'actif' => 1
			);
			$this->UtilisateurModel->insert($utili);

			$this->session->set_flashdata('success', 'Veuillez-vous connecter après inscription.');

			redirect(site_url('connexion/index'));
		}
	}
}