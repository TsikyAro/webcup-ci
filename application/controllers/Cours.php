<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cours extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CoursModel');
	}
	public function template($page, $data)
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/cours/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
	public function listCours()
	{
		$data['teams'] = 'CodeForce';
		$data['cours'] = $this->CoursModel->get_all_cours();
		if(isset($_GET['erreur'])){
			$data['erreur'] = $_GET['erreur'];
		}
		$this->template('listCours', $data);
	}

	public function ficheCours()
	{
		$data['teams'] = 'CodeForce';
		$cour = $_GET['cours'];
		$course = $this->CoursModel->get_all_cours_indice($this->session->userdata('user')->id);
		if ($this->session->userdata('user') && $cour > 1 && $course!=null) {
			$cours = $this->CoursModel->get_cours_by_id($cour);
			$data['cours'] = $cours;
			$this->template('ficheCours', $data);
		}else if($cour>=2 && $course==null){
			redirect('Cours/listCours?erreur=You must finish the previous level to access the next one.');
		}else if($cour == 1){
			$cours = $this->CoursModel->get_cours_by_id($cour);
			$data['cours'] = $cours;
			$this->template('ficheCours', $data);
		}else{
			redirect(base_url('authentification/signin'));
		}
	}

	public function politesse()
	{
		$data['teams'] = 'CodeForce';
		$this->template('politesse', $data);
	}
}