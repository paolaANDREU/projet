<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Player_model extends User_model
{
	protected $table='player';

	public function __construct(){
		parent::__construct();
	}

	public function createPlayer($license) {
		$data=array('license'=>$license);
		return $this->create($data);
	}

	public function isPlayer($license) {
		$data=array('license'=>$license);
		$res=$this->count($data);
		return $res;
	}

	public function upcomingmatches($license){
		$this->db->select('idclass');
		$this->db->from('perform_in');
		$this->db->where('year =', date("Y"));
		$this->db->where('license =', $license);
		$res =$this->db->get()->result();
		$idclass=$res[0]->idclass;

		$this->db->select('*');
		$this->db->from('match');
		$this->db->where('date >', date("Y-m-d"));
		$this->db->where('idclass =', $idclass);
		return $this->db->get()->result();

	}

}
?>
