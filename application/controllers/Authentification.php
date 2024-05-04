<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentification extends CI_Controller
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
		$this->load->view('pages/authentification/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
	public function signin()
	{
		$data['teams'] = 'CodeForce';

		$this->template('signin', $data);
	}

	public function signup()
	{
		$data['teams'] = 'CodeForce';

		$this->template('signup', $data);
	}
}