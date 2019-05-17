<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

// ajout d'un utilisateur
  public function index()
  {/*
    $this->load->library('form_validation');
    $this->form_validation->set_rules('license', 'License', 'trim|required|min_length[5]|max_length[5]');
    $this->form_validation->set_rules('lastname', 'Lastname', 'required');
    $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
    $this->form_validation->set_rules('birth', 'Birth', 'trim|required');
    $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[5]|max_length[5]');
    $this->form_validation->set_rules('adress', 'Adress', 'trim|required');
    $this->form_validation->set_rules('postalCode', 'PostalCode', 'trim|required|min_length[5]|max_length[5]');
    $this->form_validation->set_rules('city', 'City', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
    if($this->form_validation->run()==FALSE){
    $this->load->view('navbar');
    $this->load->view('registration_form');
  }else{*/

  $data = array(
    'license'	=> $this->input->post('license'),
    'lastname' => $this->input->post('lastname'),
    'firstname' => $this->input->post('firstname'),
    'email' => $this->input->post('email'),
    'birth' => date('Y-m-d', strtotime($this->input->post('birth'))),
    'phone' => $this->input->post('phone'),
    'adress' => $this->input->post('adress'),
    'postalCode'	=> $this->input->post('postalCode'),
    'city' => $this->input->post('city'),
    'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT));

    $this->load->model('User_model','new_user');

    if ($this->new_user->create($data)){
      if ($this->input->post('select')=='player') {
        $this->load->model('Player_model','new_player');
        $this->new_player->createPlayer($this->input->post('license'));
        $this->load->model('Perform_in_model');
        $this->Perform_in_model->addPerf($this->input->post('license'),$this->input->post('categorie'));
      }else{
        $this->load->model('Coach_model','new_coach');
        $this->new_coach->createCoach($this->input->post('license'));
      }
      $this->load->view('navbar');
      $this->load->view('connection_form');
    }else{
      $this->load->view('navbar');
      $this->load->view('welcome_message');
    }

  }

}
