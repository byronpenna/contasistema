<?php 
include_once(APPPATH.'models/padrem.php');
class LibrosModel extends Padrem
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getLibroMayor($frm){
		$retorno 	= new stdClass();
		$resultados = array();
		for ($i=1; $i <=2 ; $i++) { 
			$sql 		= "call sp_getCargoAbonoCuenta(".$frm->idCuenta.",".$i.")";
			$query 		= $this->db->query($sql);
			$result 	= $query->result();
			$resultados[$i-1] = $result;
			$query->free_result();
			$query->next_result();
		}
		$retorno->cargos = $resultados[0]; 
		$retorno->abonos = $resultados[1];
		$retorno->estado = true;
		return $retorno;
	}
	//
}