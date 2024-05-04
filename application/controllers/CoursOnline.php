<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('Base_Controller.php');
class CoursOnline extends Base_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('CoursController');
	}
	public function template($page, $data){
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/accueil/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
    public function index(){
		$data['teams'] = 'CodeForce';
        $cours1 = $this->CoursController->get_all_cours();
        $data['cours'] = $cours1;
        $_SESSION['cours'] = $cours1->ordre;
		// $this->template('accueil', $data); affichage cours 1
	}

}