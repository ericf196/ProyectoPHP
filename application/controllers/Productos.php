<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	
	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/productos');
		$this->load->view('principal/footer');
	}
}
