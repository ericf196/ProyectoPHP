<?php 
class Usuario_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_usuario($usuario,$password)
	{
			 $resultado=$this->db->get_where('usuarios', array('usuario' => $usuario,'password'=>$password));				
			 return $resultado->row();
	}
}