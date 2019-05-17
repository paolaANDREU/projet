<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Match_model');
		$res=$this->Match_model->upcomingmatches();
		$data=array('matchs'=>$res);
		$this->load->view('navbar');
		$this->load->view('welcome_message',$data);
	}

	public function registration()
	{
		$this->load->model('Class_model');
		$data=$this->Class_model->listClass();
		$this->load->view('navbar');
		$this->load->view('registration_form',$data);
	}

	public function connection()
	{
		$this->load->view('navbar');
		$this->load->view('connection_form');
	}
}
