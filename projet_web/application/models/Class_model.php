<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_model extends MY_model
{
	protected $table='class';

	function __construct()
	{
		parent::__construct();
	}

//retourne la liste des catégories existantes dans le club
	function listClass(){
		return array("data"=>$this->read('*'));
	}
}
?>
