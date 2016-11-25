<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	
	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/productos');
		$this->load->view('principal/footer');
	}

	public function traer_productos()
	{
		
		#echo '<script type="text/javascript" charset="utf-8">alert("'. print_r($producto['photo']).'"); </script>';
		
		$this->load->model('Producto_model');
		$this->Producto_model->get_producto();
		
		if($bool){
			redirect(base_url().'index.php/Principal');
		}



	}


}
