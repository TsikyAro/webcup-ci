<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller
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
		$this->load->view('pages/accueil/' . $page, $data);
		$this->load->view('templates/home/footer', $data);
	}
	public function index()
	{
		$data['logos'] = [
			'24h-blanc-HD.png',
			'avana.jpg',
			'etech.webp',
			'ingenosya.webp',
			'mndpt.webp',
			'pulse.webp',
			'novity.webp',
			'vivetic.webp',
			'pa4h.webp',
			'fulldigits-1.webp',
			'telma.jpg',
			'hodi.png',
			'bocasay.webp',
			'webcup.png'
		];

		$this->template('accueil', $data);
	}
	public function institut()
	{
		$data['teams'] = 'CodeForce';

		$this->template('institut', $data);
	}
	public function onirix()
	{
		$data['teams'] = 'CodeForce';

		$this->template('oronix', $data);
	}
}