<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cours extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
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

		$this->template('listCours', $data);
	}

	public function ficheCours()
	{
		$data['teams'] = 'CodeForce';

		$this->template('ficheCours', $data);
	}
}