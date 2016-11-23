<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('principal/contacto');
	}

	public function guardarContacto()
	{
		$nombre=$this->input->post('nombre');
		$email=$this->input->post('email');
		$asunto=$this->input->post('asunto');
		$comentario=$this->input->post('comentario');


      	$this->load->model('contacto_model');
      	$this->contacto_model->insertar_contacto($nombre,$email,$asunto,$comentario);

		redirect(base_url().'index.php/Contact');
		
	}
}
