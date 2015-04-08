<?php 
class WelcomeModel extends CI_Model
{
	
	function __construct()
	{
		
	}
	// regresa un boleano
	function logueo($frm){
		// vars 
			$retorno = new stdClass();
			$sql = "SELECT * from usuarios where usuario = '".$frm->txtUsuario."' and pass= '".$frm->txtPass."'";
		// trans
			$this->db->trans_start();
				$query = $this->db->query($sql);
			$this->db->trans_complete();
		if($query->num_rows() > 0){
			$resultado = $query->result();
			$retorno->estado = true;
			$retorno->usuario = $resultado[0];	
		}else{
			$retorno->estado = false;
		}
		
		return $retorno;
	}
}