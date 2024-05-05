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
		$this->load->model('NiveauModel');
		$this->load->model('CoursModel');

		$data['logos'] = [
			'24h-blanc-HD.webp',
			'avana.jpg',
			'etech.webp',
			'ingenosya.webp',
			'mndpt.webp',
			'pulse.webp',
			'novity.webp',
			'vivetic.webp',
			'pa4h.webp',
			'fulldigits-1.webp',
			'telma.webp',
			'hodi.png',
			'bocasay.webp',
			'webcup.png'
		];

		$data['teams'] = [
			[
				'name' => 'Aro',
				'fonction' => 'Developer',
				'image' => '5.webp',
			],
			[
				'name' => 'Tony',
				'fonction' => 'Developer',
				'image' => '8.webp',
			],
			[
				'name' => 'Finaritra',
				'fonction' => 'Developer',
				'image' => '7.webp',
			],
			[
				'name' => 'Tsiory',
				'fonction' => 'Developer',
				'image' => '6.webp',
			],
		];

		$data['temoinages'] = [
			[
				'name' => 'Zed',
				'fonction' => 'Transitioning Zombie',
				'image' => 'zed.webp',
				'parole' => 'HumanizeU equipped me with the necessary tools to successfully integrate into human society. Thanks to their interactive and informative courses, I feel more confident and competent in my daily interactions with humans.'
			],
			[
				'name' => 'Zoé',
				'fonction' => 'Learning Enthusiast Zombie',
				'image' => 'zoe.webp',
				'parole' => "I am incredibly grateful to HumanizeU for helping me find my place in this new world. Their dedicated team supported me every step of my transformation, and now I'm proud to say that I'm a model citizen zombie!"
			],
			[
				'name' => 'Zara',
				'fonction' => 'Satisfied and Flourishing Zombie',
				'image' => 'zara.webp',
				'parole' => 'HumanizeU has exceeded all my expectations in learning and integration. Their courses are enriching and relevant, and I was able to immediately apply what I learned in my daily life. I highly recommend this platform to any zombies looking to integrate into human society.'
			],
		];

		$data['niveaux'] = $this->NiveauModel->get_all_niveau();
		$data['cours'] = $this->CoursModel->get_trois_cours_random();

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