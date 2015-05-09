<?php
class Padrem extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function resultadoCorrecto($respuesta){
		if($respuesta->flag && $respuesta->num_inserts > 0 && $respuesta->error_number == ""){
			return true;
		}else{
			return false;
		}
	}
	function insertDb($tabla,$data){
		$this->db->trans_start();
			$flag 			= $this->db->insert($tabla, $data); 
			$num_inserts 	= $this->db->affected_rows();
			$errorNumber   	= $this->db->_error_number();
			$errorMessage 	= $this->db->_error_message();
			$insertId		= $this->db->insert_id();
		$this->db->trans_complete();
		// preparando retorno
			$retorno = new stdClass();
			$retorno->flag 				= $flag;
			$retorno->num_inserts 		= $num_inserts;
			$retorno->error_message 	= $errorMessage;
			$retorno->error_number 		= $errorMessage;
			$retorno->insert_id 		= $insertId;
		return $retorno;
	}
}