<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once('Base_Controller.php');
class CoursOnline extends Base_Controller{
	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->model('CoursModel');
        $this->load->model('ResultatModel');
		$this->load->model('QcmCoursModel');
		$this->load->model('QcmReponseModel');
		$this->load->model('UtilisateurModel');
	}
	public function template($page, $data){
		if (!file_exists(APPPATH . 'views/pages/cours/' . $page . '.php')) {
			// show_404();
		}

		$this->load->view('templates/home/header', $data);
		$this->load->view('pages/cours/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
    public function index(){
		$data['teams'] = 'CodeForce';
        $data['cours'] = $this->CoursModel->get_cours_user($this->session->userdata('user')->id);
		$this->template('listCours_online', $data);
	}

	public function fiche()
	{
		$data['teams'] = 'CodeForce';
		$cour = $_GET['cours'];
		$go = $this->checker_prochain_cours($cour, $this->session->userdata('user')->id);
		if(!$go){
			$this->session->set_flashdata('message', 'You must finish the previous level to access the next one.');
			redirect(base_url('coursOnline'));
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
		$arefaire = $this->input->get('arefaire');

		if($arefaire == "true"){
			$this->QcmReponseModel->delete([
				'idqcmcours' => $idcours,
				'idutilisateur' => $this->session->userdata('user')->id
			]);
		}
		
		$data['cours'] = $this->CoursModel->get_cours_by_id($idcours);
		$data['questions'] = $this->QcmCoursModel->get_by_id_cours($idcours);

		foreach ($data['questions'] as &$question) {
			$question->reponses_possibles = $this->QcmReponseModel->get_by_id_question($question->id);
		}

		$this->template('qcm', $data);
	}

	public function validate_qcm()
	{
		$question_ids = $this->input->post('question_id');
		$answers = $this->input->post('answer');

		$question_answer_pairs = [];

		// Parcourir les identifiants de question
		foreach ($question_ids as $question_id) {
			// Vérifier si une réponse existe pour cette question
			if (isset($answers[$question_id])) {
				// Stocker la paire question_id - réponse
				$question_answer_pairs[$question_id] = $answers[$question_id];
			} else {
				// Si aucune réponse n'est fournie, stocker null comme réponse
				$question_answer_pairs[$question_id] = null;
			}
		}

		$id_cours = $this->input->post('coursid');
		foreach ($question_answer_pairs as $question_id => $answer) {
            // Créer un tableau de données à insérer en base de données
            $data = array(
                'idqcmcours' => $question_id,
                'reponseutilisateur' => $answer,
				'idutilisateur' => $this->session->userdata('user')->id
            );

            // Insérer les données en base de données à l'aide du modèle Reponse_model
            $this->QcmReponseModel->insert($data);
        }

		// Rediriger vers la page de résultat avec l'ID du cours en tant que paramètre GET
		return redirect('/coursOnline/resultat?idcours=' . $id_cours);
	}

	public function resultat()
	{
		$idcours = $this->input->get('idcours');
		$cours = $this->CoursModel->get_cours_by_id($idcours);
	$data['resultats'] = $this->ResultatModel->getresultat($idcours,$this->session->userdata('user')->id);
		$resultats = $data['resultats'];
	$nombre_de_reponses_correctes = 0;

// Calculer le nombre de réponses correctes
foreach ($resultats as $resultat) {
    // Vérifier si la réponse de l'utilisateur est correcte
    if ($resultat->bonne_reponse == $resultat->reponseutilisateur) {
        $nombre_de_reponses_correctes++;
    }
}

// Calculer la note sur 10
$nombre_de_questions = count($resultats);
$note = ($nombre_de_reponses_correctes / $nombre_de_questions) * 10;

if($note>= 8 ){
	$this->UtilisateurModel->insert_user_niveau(
		array(
			'idutilisateur' => $this->session->userdata('user')->id,
			'idniveau' => $cours->idniveau,
			'idcourstermine' => $idcours
		));
	
}
$data['cours']= $cours;
		$this->template('resultat_online', $data);
	}


}