<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');

	}


	public function ingresar()
	{
		$username=$this->input->post('username');
		$password=sha1($this->input->post('password'));

      	$respuesta=$this->Usuario_model->get_usuario($username,$password);
      	

      	$data[]=NULL;
      	if($respuesta){
      		$data = [
      				"id_usuario" => $respuesta->idUsuario,
      				"usuario" => $respuesta->usuario,
      				"password" => $respuesta->password,
      				"rol" => $respuesta->rol
      				];
			////echo var_dump($data);
      		$this->session->set_userdata($data);
      		echo "TRUE"; 
      	}
		//redirect(base_url().'index.php/Contact');
		
	}


	public function cerrar_sesion()
	{
		
      	$this->session->sess_destroy();
		redirect(base_url());
		
	}
}
