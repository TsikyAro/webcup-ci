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
		if ($this->session->user) {
			redirect(site_url('coursonline'));
		}
		$data['teams'] = 'CodeForce';

		$this->template('signin', $data);
	}

	public function signup()
	{
		if ($this->session->user) {
			redirect(site_url('coursonline'));
		}
		$data['teams'] = 'CodeForce';

		$this->template('signup', $data);
	}

	public function login(){
		if ($this->session->user) {
			redirect(site_url('coursonline'));
		}
		$data= [];
		$this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
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
	$data = [];
    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
		$this->template('signup', $data);
    } else {
        // Validation réussie, inscrire l'utilisateur
        // Récupérer les données du formulaire
        $nom = $this->input->post('name');
        $pseudo = $this->input->post('pseudo');
        $password = $this->input->post('password');
        
        // Créer un tableau avec les données de l'utilisateur
        $utili = array(
            'nom' => $nom,
            'pseudo' => $pseudo,
            'motdepasse' => $password,
        );
        
        // Insérer l'utilisateur dans la base de données
        $this->UtilisateurModel->insert($utili);
        
        // Afficher un message de succès et rediriger
        $this->session->set_flashdata('success', 'Please log in after registration.');
        redirect(site_url('authentification/login'));
    }
}

}