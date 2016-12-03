<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->model('Producto_model');
       	$data['producto'] = $this->Producto_model->get_producto();
		//$data['producto']=traer_productos();
		print_r($data);
		
		//var_dump($data);

		$this->load->view('principal/header');
		$this->load->view('principal/principal',$data);
		$this->load->view('principal/footer');
	}
}
