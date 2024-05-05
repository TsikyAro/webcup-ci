<?php
class Utilisateur extends CI_Controller {

    public function index() {
        $this->load->model('UtilisateurModel');
        $data['utilisateurs'] = $this->UtilisateurModel->get_utilisateurs_niveau();
        $this->load->view('pages/admin/utilisateurview', $data);
    }

    public function dashboard() {
        $this->load->model('UtilisateurModel');
        $this->load->model('CoursModel');
        $this->load->model('QcmCoursModel');
        $data['total_non_admin_users'] = $this->UtilisateurModel->count_non_admin_users();
        $data['total_cours'] = $this->CoursModel->count_cours();
        $data['total_qcm'] = $this->QcmCoursModel->count_qcm();
        $data['utilisateurs_par_niveau'] = $this->UtilisateurModel->get_users_by_level();
        $this->load->view('pages/admin/dashboard', $data);
    }

    

}
?>
