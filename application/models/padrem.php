<?php
class Padrem extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function deleteDb($tabla,$where){
		$this->db->trans_start();
			$flag = $this->db->delete($tabla,$where); 
			$num_afected 	= $this->db->affected_rows();
			$errorNumber   	= $this->db->_error_number();
			$errorMessage 	= $this->db->_error_message();
		$this->db->trans_complete();
		// preparando retorno
			$retorno = new stdClass();
			$retorno->flag 		= $flag;
			$retorno->num_afected 		= $num_afected;
			$retorno->error_message 	= $errorMessage;
			$retorno->error_number 		= $errorMessage;
		return $retorno;
	}
	function insertDb($tabla,$data){
		$this->db->trans_start();
			$flag 			= $this->db->insert($tabla, $data); 
			$num_afected 	= $this->db->affected_rows();
			$errorNumber   	= $this->db->_error_number();
			$errorMessage 	= $this->db->_error_message();
			$insertId		= $this->db->insert_id();
		$this->db->trans_complete();
		// preparando retorno
			$retorno = new stdClass();
			$retorno->flag 				= $flag;
			$retorno->num_afected 		= $num_afected;
			$retorno->error_message 	= $errorMessage;
			$retorno->error_number 		= $errorMessage;
			$retorno->insert_id 		= $insertId;
		return $retorno;
	}
}