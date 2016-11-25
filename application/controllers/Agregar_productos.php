<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar_productos extends CI_Controller {


	public function index()
	{
		$this->load->view('principal/header');
		$this->load->view('principal/agregar_productos');
		$this->load->view('principal/footer');
	}

	public function guardarProducto()
	{
		$this->load->model('File');
		$producto=$this->input->post();
		#echo '<script type="text/javascript" charset="utf-8">alert("'. print_r($producto['photo']).'"); </script>';
		
		$file_name=$this->File->UploadImage('./application/imagen','No es posible acceder');
		$producto['file_name']=$file_name;
		$this->load->model('Producto_model');
		$bool=$this->Producto_model->insertar_producto($producto);
		echo $bool;
		if($bool){
			redirect(base_url().'index.php/Principal');
		}
	}	

}