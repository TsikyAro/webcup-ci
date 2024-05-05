<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('Admin_Controller.php');
class AdminProcess extends Admin_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UtilisateurModel');
	}
	public function template($page, $data){
		if (!file_exists(APPPATH . 'views/pages/admin' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/admin/header', $data);
		$this->load->view('pages/admin/' . $page, $data);
		$this->load->view('templates/admin/footer', $data);
	}
    public function index(){
		redirect(base_url('utilisateur/dashboard'));
	}

}