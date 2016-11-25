<?php 
class Producto_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//creamos la funcion nuevo comentario que será la que haga la inserción a la base
	//de datos pasándole los datos a introducir en forma de array, siempre al estilo ci
	function insertar_producto($producto=null)
	{

		if($producto!=null){
			$nombre_imagen =$producto['nombre_imagen'];
			$descripcion_imagen =$producto['descripcion_imagen'];
			$file_name =$producto['file_name'];
			$array_producto= array('nombreProducto' => $nombre_imagen,'descripcionProducto' => $descripcion_imagen,'urlProducto' => $file_name);
			$this->db->insert('productos',$array_producto);
			return true;
		}else{
			echo'<script type="text/javascript" charset="utf-8">alert("Error al subir la imagen");</script>';
			return false;
		}

	}


	function get_producto()
		{
			
			//$query=$this->db->order_by('idProducto', 'DESC');
			//$query=$this->db->get('productos',6);
			$query=$this->db->get('productos');
			$resultado = $query->result();
			return $resultado;

			/*$this->db->select('id, titulo, descripcion, prioridad');
     		 $this->db->from('informes');
     		$this->db->order_by('prioridad, titulo', 'asc');
      		$consulta = $this->db->get();
     		 $resultado = $consulta->result();
      		return $resultado;*/
			
		}

}