<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coach_model extends User_model
{
	protected $table='coach';

	function __construct()
	{
		parent::__construct();
	}

	public function createCoach($license) {
		$data=array('license'=>$license);
		return $this->create($data);
	}
	
}
?>
