<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coach extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('navbar_connected');
    $this->load->view('menu_coach');
  }

  function add_class()
  {
    if ($this->input->post('categorie', TRUE) && $this->input->post('number', TRUE) && $this->input->post('niveau', TRUE)) {
      $desc=$this->input->post('categorie')." ".$this->input->post('niveau', TRUE)." ".$this->input->post('number');
      $data=array('description'=> $desc);
      $this->load->model('Class_model');
      $this->Class_model->create($data);
      $this->load->view('navbar_connected');
      $this->load->view('menu_coach');
      $text=array('text'=>'La catégorie a été ajoutée');
      $this->load->view('success',$text);
      $this->load->view('add_class');

    }else {
      redirect(site_url('class_controller'));
    }

  }

  function add_match_form()
  {
    $this->load->model('Class_model');
    $data=$this->Class_model->listClass();
    $this->load->view('navbar_connected');
    $this->load->view('menu_coach');
    $this->load->view('add_match',$data);
  }


  function add_match()
  {
    if ($this->input->post('categorie', TRUE) && $this->input->post('date', TRUE) && $this->input->post('hour', TRUE) && $this->input->post('oppositeteam', TRUE) && $this->input->post('numberplayer', TRUE) && $this->input->post('athome', TRUE)) {
      $idclass=$this->input->post('categorie');
      $date=$this->input->post('date');
      $hour=$this->input->post('hour');
      $oppositeteam=$this->input->post('oppositeteam');
      $numberplayer=$this->input->post('numberplayer');
      $athome=$this->input->post('athome');
      $data=array('date'=>date('Y-m-d', strtotime($date)),
      'hour'=>$hour.':00',
      'oppositeteamcity'=>$oppositeteam,
      'athome'=>(int)$athome,
      'maxnumberplayer'=>(int)$numberplayer,
      'idclass'=>(int)$idclass);

      $this->load->model('Match_model');
      $this->Match_model->create($data);
      $text=array('text'=>'Le match a été ajouté');
      $this->load->view('navbar_connected');
      $this->load->view('menu_coach');
      $this->load->view('success',$text);
      $this->load->view('add_match');

    }else {
      redirect(site_url('coach/add_match_form'));
    }
  }

}
