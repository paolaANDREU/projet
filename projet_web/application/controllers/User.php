<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	//charge la page d'erreur de connexion
	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('connection_form');
		$this->load->view('error');
	}

	public function login()
	{
		$this->load->model('Player_model');
		$license=$this->get_license();

		$res=$this->Player_model->isPlayer($license);
		$this->load->view('navbar_connected');
		if($res==1){

			$this->load->view('menu_player');
		}else {

			$this->load->view('menu_coach');
		}
	}

	public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie($this->get_cookie_id_name());
		$this->load->view('navbar');
		$this->load->model('Match_model');
		$res=$this->Match_model->upcomingmatches();
		$data=array('matchs'=>$res);
		$this->load->view('welcome_message',$data);
	}


	public function updateAccount()
	{
		$where=array('license'	=> $this->get_license());
		$data = array(
			'lastname' => $this->input->post('lastname'),
			'firstname' => $this->input->post('firstname'),
			'email' => $this->input->post('email'),
			'birth' => date('Y-m-d', strtotime($this->input->post('birth'))),
			'phone' => $this->input->post('phone'),
			'adress' => $this->input->post('adress'),
			'postalCode'	=> $this->input->post('postalCode'),
			'city' => $this->input->post('city'));
			$this->load->model('User_model');
			if ($this->User_model->update($where,$data)){
				redirect(site_url('user/login'));
			}else {
				redirect(site_url('user/account'));
			}
		}

//charge la page compte
		public function account()
		{
			$this->load->model('User_model');
			$data=$this->User_model->readUserLicense($this->get_license());
			$res=$data[0];
			$this->load->view('navbar_connected');
			$this->load->view('account',$res);
		}

//charge la page agenda
		public function calendar()
		{
			$this->load->model('Player_model');
			$license=$this->get_license();
			$this->load->view('navbar_connected');
			$res=$this->Player_model->isPlayer($license);

			if($res==1){

				$this->load->view('menu_player');
			}else {

				$this->load->view('menu_coach');
			}
			$this->load->model('Match_model');
			$res=$this->Match_model->upcomingmatches();
			$data=array('matchs'=>$res);
			$this->load->view('welcome_message',$data);
		}
	}
