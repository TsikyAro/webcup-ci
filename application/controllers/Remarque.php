<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Remarque extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('remarque_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function insert() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, show the form again with validation errors
            // $this->load->view('');
        } else {
            // Validation passed, proceed with inserting data into database
            $data = array(
                'nom' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'contenu' => $this->input->post('message')
            );

            if ($this->remarque_model->insert_remarque($data)) {
                // Insertion successful
                echo "Data inserted successfully.";
            } else {
                // Insertion failed
                echo "Failed to insert data.";
            }
        }
        redirect(base_url());
    }
}
?>
