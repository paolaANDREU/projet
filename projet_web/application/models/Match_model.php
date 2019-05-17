<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Match_model extends MY_model
{
	protected $table='match';

	function __construct()
	{
		parent::__construct();
	}

	public function upcomingmatches(){
		$this->db->select('*');
		$this->db->from('match');
		$this->db->join('class', 'class.idclass = match.idclass');
		$this->db->where('date >', date("Y-m-d"));
		return $this->db->get();
	}
}
?>
