<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller
{
	public function index()
	{
		$this->load->model('user_model', 'userManager');

	//	Le nombre d'entrées dans la table du modèle userManager
	$query = $this->userManager->read();
	foreach ($query as $row)
	{
	        echo $row->license ."<br/>";

	}
	}

public function creer()
	{
		$this->load->model('user_model', 'userManager');

	$options_echappees = array();
	$options_echappees['license'] = '33333322';
	$options_echappees['lastname'] = 'toto';
	$options_echappees['firstname'] = 'arthur';
	$options_echappees['email'] = 'toto@t.fr';
	$options_non_echappees = array();
	$options_non_echappees['birth'] = 'NOW()';
	$options_echappees['phone'] = '0434567833';
	$options_echappees['adress'] = 'to';
	$options_echappees['postalcode'] = '44444';
	$options_echappees['city'] = 'toto';

	//	Renvoie true sans sauvegarder la date
	$resultat = $this->userManager->create($options_echappees,	$options_non_echappees);
	echo $resultat;
	}

	public function modifier()
	{
		$this->load->model('user_model', 'userManager');
		$options_echappees = array();
		$options_echappees['firstname'] = 'tata';
		$options_echappees['postalcode'] = '43334';
		$where = array('license' => '3333333');

		$resultat = $this->userManager->update($where, $options_echappees);
		echo $resultat;
	}

	public function supprimer()
	{
		$this->load->model('user_model', 'userManager');

		$where = array('license' => '322222');

		$resultat = $this->userManager->delete($where);
		echo $resultat;
	}
}
?>
