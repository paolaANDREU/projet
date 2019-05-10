<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_model
{
	protected $table='user';
	public function __construct()
	    {

	    }

//verife email et pasword lors de la connexion
	public function validateConnection($mail, $password) {
		//si il existe un email
		if($this->_existUserConnection($mail)){
			//on recupere le password associé
      if (($passwd_crypt = $this->_getUser($mail)) !== FALSE){
				//on verifie si le password entré est bon
				return password_verify($password,$passwd_crypt);
			}
    }
		return false;
  }

//verife email et pasword d'un cookie
	public function validate($mail, $password) {
		if($this->_existUser($mail)){
      if (($passwd_crypt = $this->_getUser($mail)) !== FALSE){
				return password_verify($password,$passwd_crypt);
			}
    }
		return false;
  }

//retourne password de email si il existe
	private function _getUser($mail) {
	   $user = $this->db->select(array('email', 'password'))->get_where($this->table, array('email' => $mail))->row();
	   if (isset($user->password)){
	       return $user->password;
	 }else {
	 	return false;
	 }

	}

//verifie email crypté
	public function _existUser($mail) {
				 $emails = $this->db->select('email')->get($this->table);
				 foreach ($emails->result() as $row)
			 	{
			 		if (password_verify($row->email,$mail)){

						return true;
					}

			 	}
			}
			//email crypté-> email non crypté
				private function _userEmail($mail) {
							 $emails = $this->db->select('email')->get($this->table);
							 foreach ($emails->result() as $row)
						 	{
						 		if (password_verify($row->email,$mail)){

									return $row->email;
								}

						 	}
						}
			//verifie email NON crypté
	private function _existUserConnection($mail) {
				 $emails = $this->db->select('email')->get($this->table);
				 foreach ($emails->result() as $row)
				{
					if ($row->email==$mail){

						return true;
					}

				}
	 return false;
	}

	public function readUser($mail)
	{

		$where=array('email' => $this->_userEmail($mail));

	return $this->read('*',$where);
	}

	public function readUserLicense($license)
	{

		$where=array('license' => $license);

	return $this->read('*',$where);
	}
}
?>
