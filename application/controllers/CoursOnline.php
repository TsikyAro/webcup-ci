<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('Base_Controller.php');
class CoursOnline extends Base_Controller{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('CoursModel');
	}
	public function template($page, $data){
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/cours/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
    public function index(){
		$data['teams'] = 'CodeForce';
        $cours1 = $this->CoursModel->get_all_cours_indice($_SESSION['user']);
        $data['cours'] = $cours1;
		if(empty($cours1)){
			$_SESSION['cours'] = 1;
		}else{
			$_SESSION['cours'] = $cours1[0]->ordre;
		};
		$this->template('listCours', $data);
	}

}