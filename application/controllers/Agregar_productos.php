<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar_productos extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/agregar_productos');
		$this->load->view('principal/footer');
	}

}