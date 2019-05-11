<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Player_model extends User_model
{
	protected $table='player';
	public function __construct()
	    {

	    }

	public function createPlayer($license) {
    $data=array('license'=>$license);
				 return $this->create($data);
			}
			public function isPlayer($license) {
				$data=array('license'=>$license);
				$res=$this->count($data);
				/*if ($res=1) {
					return true;
				}else {
					return false;
				}*/
				return $res;

			}

}
?>
