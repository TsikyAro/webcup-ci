<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AutentificationModel');
        $this->load->model('CoursModel');
    }
	public function index()
	{
		$this->load->view('autentifications/Login');
	}
    public function login(){
        $nom = $_POST['nom'];
        $mdp = $_POST['mdp'];
        $valiny = $this->AutentificationModel->autentification($nom,$mdp);
        if($valiny != null){
            $_SESSION['userdata'] = $valiny;
            $_SESSION['cours']++;
            // redirect('IndexController/index'); cours 2
        }
        else{
			$error ="Please check your password or username!";
			$data = array(
				'error'=> $error,
				'mail' =>$nom,
				'mdp' =>$mdp
			);
            $this->load->view('autentifications/Login',$data);
			
        }
	}
	public function signin()
	{
		$this->load->view('autentifications/Signin');
	}
}