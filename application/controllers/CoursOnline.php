<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('Base_Controller.php');
class CoursOnline extends Base_Controller{
	public function __construct()
	{
		parent::__construct();
        $this->load->model('CoursModel');
		$this->load->database();
		$this->load->model('QcmCoursModel');
		$this->load->model('QcmReponseModel');
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
        $data[
			'cours'] = $this->CoursModel->get_cours_user($this->session->userdata('user')->id);
		$this->template('listCours_online', $data);
	}

	public function fiche()
	{
		$data['teams'] = 'CodeForce';
		$cour = $_GET['cours'];
		$go = $this->checker_prochain_cours($cour, $this->session->userdata('user')->id);
		if(!$go){
			$this->session->set_flashdata('message', 'Vitao aloha ilay question suivante.');
			redirect(base_url('coursonline'));
		}
			$data['cours'] = $this->CoursModel->get_cours_by_id($cour);
			
			$this->template('ficheCours_online', $data);
	}

	private function checker_prochain_cours($cour, $user){

		$this->db->select_max('idcourstermine', 'max_id_cours_terminé');
		$this->db->where('idutilisateur', $user);
		$query = $this->db->get('utilisateur_niveau');

		// Vérifier si la requête a réussi
		if ($query->num_rows() > 0) {
			// Récupérer le résultat de la requête
			$row = $query->row();
			$cours_terminer_last = $row->max_id_cours_terminé;
			if($cours_terminer_last+1 == $cour)
			return true;
		} 
        // Si aucun résultat trouvé, retourner null ou une valeur par défaut
        return false;
	}

	public function qcm()
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


}