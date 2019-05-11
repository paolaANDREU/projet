<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
			{
					parent::__construct();
			}
	public function index()
	{
		$this->load->view('navbar');
		$this->load->view('connection_form');
		$this->load->view('error');
	}

	public function login()
		{
					$this->load->model('player_model');
					$license=$this->get_license();

					$res=$this->player_model->isPlayer($license);

					if($res==1){
						$this->load->view('navbar_connected');
						$this->load->view('menu_player');
					}else {
						$this->load->view('navbar_connected');
						$this->load->view('menu_coach');
					}
		}

		public function logout()
			{
				$this->load->helper('cookie');
				delete_cookie($this->get_cookie_id_name());
					$this->load->view('navbar');
					$this->load->view('welcome_message');
			}
			public function account()
				{
					$this->load->model('user_model');
					$data=$this->user_model->readUserLicense($this->get_license());
					$res=$data[0];
						$this->load->view('navbar_connected');
						$this->load->view('account',$res);
				}
				public function calendar()
					{
							$this->load->view('navbar_connected');
							$this->load->view('welcome_message');
					}
}
