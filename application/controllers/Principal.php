<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/principal');
		$this->load->view('principal/footer');
	}
}
