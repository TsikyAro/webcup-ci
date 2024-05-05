<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Qcm extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('CoursModel');
		$this->load->model('QcmCoursModel');
		$this->load->model('QcmReponseModel');
	}
	public function template($page, $data)
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/qcm/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
	public function index()
	{
		$data['teams'] = 'CodeForce';

		$idcours = $this->input->get('id_cours');
		$data['cours'] = $this->CoursModel->get_cours_by_id($idcours);
		$data['questions'] = $this->QcmCoursModel->get_by_id_cours($idcours);

		foreach ($data['questions'] as &$question) {
			$question->reponses_possibles = $this->QcmReponseModel->get_by_id_question($question->id);
		}

		$this->template('qcm', $data);
	}

    public function resultat()
	{
		$data['teams'] = 'CodeForce';
		$reps = $this->QcmReponseModel->get_resultat_qcm($_SESSION['qcm']['cour'],$_SESSION['user']->id);
		$reps = $this->QcmReponseModel->checknote($reps);
		$data['resultat'] = $reps;
		$this->template('resultat', $data);
		
	}
}