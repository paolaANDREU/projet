<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Class_controller extends MY_Controller {
  function __construct()
  {
    parent::__construct();
  }

//charge la page ajout de catégorie
  function index()
  {
    $this->load->view('navbar_connected');
    $this->load->view('menu_coach');
    $this->load->view('add_class');
  }

}
