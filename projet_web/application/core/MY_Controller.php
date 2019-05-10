<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class MY_Controller extends CI_Controller
{

  private $_cookie = array(
                   // 'name'   => '',
                   // 'value'  => '',
                   'expire' => '86500',//time
                   // 'domain' => '.some-domain.com',
                   'path'   => '/',
                   // 'prefix' => '',
               );

    private $_cookie_id_name = "189CDS8CSDC98JCPDSCDSCDSCDSD8C9SD"; // nom d'un cookie

    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->model('User_model');

        //si demande de connexion
        if ($this->input->post('email', TRUE) && $this->input->post('password', TRUE))
        {
          //si identifiants ok
            if ($this->User_model->validateConnection($this->input->post('email'), $this->input->post('password')))
            {

              //creation d'un cookie
                $cookies_identifiant = $this->_cookie;
                $cookies_identifiant['name'] = $this->_cookie_id_name;
                //la valeur du $cookies_identifiant est le mail crypté
                $cookies_identifiant['value'] = password_hash($this->input->post('email'),PASSWORD_DEFAULT);
                // $cookies_identifiant['domain'] = "";
                $cookies_identifiant['prefix'] = $this->config->item('cookie_prefix');
                set_cookie($cookies_identifiant);

                // Tout est ok, ont redirige vers la page d'accueil du user
                redirect(site_url('user'));
            }
            else
            {
                // Mauvais identifiant, ont redirige vers la page de connexion
                redirect(site_url('user/login'));
            }
        }
        //si pas de demande de connexion mais changement de page
        elseif (get_cookie($this->config->item('cookie_prefix').$this->_cookie_id_name, TRUE))
        {
          //recupere le mail du cookie pour voir si sa correspond à un utilisateur
            $mail = get_cookie($this->config->item('cookie_prefix').$this->_cookie_id_name);

            if ($this->User_model->_existUser($mail) == FALSE)
                redirect(site_url('user/login')); // Mauvais identifiant, ont redirige vers la page de connexion
        }
        elseif ($this->router->fetch_class() != "user")
        {
            redirect(site_url('user/login')); // Mauvais identifiant, ont redirige vers la page de connexion
        }
    }
    public function get_license(){
      $data=$this->user_model->readUser(get_cookie($this->config->item('cookie_prefix').$this->_cookie_id_name));
      $res=$data[0];
      return $res['license'];
    }
}


 ?>
