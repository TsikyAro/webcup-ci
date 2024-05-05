<?php
class Utilisateur extends CI_Controller {

    public function index() {
        $this->load->model('UtilisateurModel');
        $data['utilisateurs'] = $this->UtilisateurModel->get_utilisateurs_niveau();
        $this->load->view('pages/admin/utilisateurview', $data);
    }

}
?>
