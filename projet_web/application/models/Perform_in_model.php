<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perform_in_model extends MY_model
{
	protected $table='perform_in';

	function __construct()
	{
		parent::__construct();
	}

	function addPerf($license,$idClass){
		return (bool) $this->create(array("license"=>$license,"idclass"=>$idClass),array('year'=>'YEAR(NOW())'));
	}
}
?>
