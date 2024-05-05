<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remarque extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('RemarqueModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function insert() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, show the form again with validation errors
            redirect(base_url());
        } else {
            // Validation passed, proceed with inserting data into database
            $data = array(
                'nom' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contenu' => $this->input->post('message')
            );

            if ($this->RemarqueModel->insert_remarque($data)) {
                // redirect(base_url());

            } else {
                // redirect(base_url());
            }
        }
        redirect(base_url());
    }

    public function remarks() {
        $this->load->model('RemarqueModel');
        $data['remarks'] = $this->RemarqueModel->get_All_Remark();
        $this->load->view('pages/admin/remark', $data);
    }


}
?>
