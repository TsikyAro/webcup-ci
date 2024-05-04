<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }
	private function viewer($page, $data)
	{
		$data = array(
			'page' => $page,
			'data' => $data
		);
		$this->load->view('template/BasePage', $data);
	}

	public function index()
	{
		$this->viewer('admin/editors',[]);
	}
}