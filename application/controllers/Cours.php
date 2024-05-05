<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cours extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CoursModel');
		$this->load->model('QcmReponseModel');
		$this->load->model('UtilisateurModel');
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
		$this->template('listCours', $data);
	}
	public function resultat()
	{
		if(isset($_GET['cours']) && isset($_GET['reponses'])){
			$cours = $_GET['cours'];
			$reponses_radio = $this->input->get('reponses');
			foreach ($reponses_radio as $question_id => $reponse) {
				$_SESSION['qcm']['question'] = $question_id;
				$_SESSION['qcm']['reponse'] = $reponse;
				$_SESSION['qcm']['cour'] = $cours;
			}
		}else{
			$cours = $_SESSION['qcm']['cour'] ;
		}
		if(isset($_SESSION['user'])){
			// check reponse 
			$this->QcmReponseModel->insert_qcm_reponse($_SESSION['qcm']['question'] ,$_SESSION['qcm']['reponse'] ,$_SESSION['user']->id);
			// insertion donnes dans user_niveau
			$niveau= $this->CoursModel->get_Niveau($cours);
			$this->UtilisateurModel->insertion_utilisateur_niveau($niveau->id,$_SESSION['user']->id,$cours);
			redirect('Qcm/resultat');
		}else{
			redirect(base_url('authentification/signin'));
		}
		// var_dump($_SESSION['qcm']);
		// $data['teams'] = 'CodeForce';
		// $data['cours'] = $this->CoursModel->get_all_cours();
		// $this->template('listCours', $data);
	}

	public function ficheCours()
	{
		$data['teams'] = 'CodeForce';
		$cour = $_GET['cours'];
		if($cour!=1){
			$this->session->set_flashdata('message', 'Vitao aloha ilay 1.');
			redirect(base_url('cours/listCours'));
		}
			$data['cours'] = $this->CoursModel->get_cours_by_id($cour);
			
			$this->template('ficheCours', $data);
	}

	public function feeling()
	{
		$data['teams'] = 'CodeForce';
			$this->template('feeling', $data);
	}

}