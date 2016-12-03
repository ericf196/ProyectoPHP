<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Producto_model');
       	$data['producto'] = $this->Producto_model->get_producto();
		//$data['producto']=traer_productos();
		//print_r($data);
		
		//var_dump($data);
		$this->load->view('principal/header');
		$this->load->view('principal/productos',$data);
		$this->load->view('principal/footer');
	}

	public function traer_productos()
	{		
		
		echo '<script type="text/javascript" charset="utf-8">alert("aqui fue"); </script>';
		$this->load->model('Producto_model');
		$productos=$this->Producto_model->get_producto();
		
		if($bool){
			redirect(base_url().'index.php/Principal');
		}
		return $productos;

	}


}
