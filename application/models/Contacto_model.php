<?php 
class Contacto_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//creamos la funcion nuevo comentario que será la que haga la inserción a la base
	//de datos pasándole los datos a introducir en forma de array, siempre al estilo ci
	function insertar_contacto($nombre,$email,$asunto,$comentario)
	{
		$data = array(); 
		$data = array(
				'contactoNombre' => $nombre,
				'contactoEmail' => $email,
				'contactoAsunto' => $asunto,
				'contactoComentario'=>$comentario
				);
		//aqui se realiza la inserción, si queremos devolver algo deberíamos usar delantre return
		//y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
		//envíar un email, en fin, lo que deseemos hacer
		$this->db->insert('contactos',$data);
	}
}