<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

//charge la page d'accueil de l'application
	public function index()
	{
		$this->load->model('Match_model');
		$res=$this->Match_model->upcomingmatches();
		$data=array('matchs'=>$res);
		$this->load->view('navbar');
		$this->load->view('welcome_message',$data);
	}

//charge la page s'inscrire
	public function registration()
	{
		$this->load->model('Class_model');
		$data=$this->Class_model->listClass();
		$this->load->view('navbar');
		$this->load->view('registration_form',$data);
	}

//charge la page de connexion
	public function connection()
	{
		$this->load->view('navbar');
		$this->load->view('connection_form');
	}
}
