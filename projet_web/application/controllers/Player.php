<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends MY_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->view('navbar_connected');
    $this->load->view('menu_player');
  }

  public function upcommingmatches(){
    $this->load->model('Player_model');
    $data=$this->Player_model->upcomingmatches($this->get_license());
    $res=array('matchs'=>$data);
    $this->load->view('navbar_connected');
    $this->load->view('menu_player');
    if(count($data)!=0){
      $this->load->view('upcommingmatches',$res);
    }
  }

}
