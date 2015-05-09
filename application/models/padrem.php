<?php
class Padrem extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function insertDb($tabla,$data){
		$this->db->trans_start();
			$flag 			= $this->db->insert($tabla, $data); 
			$num_inserts 	= $this->db->affected_rows();
			$errorNumber   	= $this->db->_error_number();
			$errorMessage 	= $this->db->_error_message();
		$this->db->trans_complete();
		// preparando retorno
			$retorno = new stdClass();
			$retorno->flag 				= $flag;
			$retorno->num_inserts 		= $num_inserts;
			$retorno->error_message 	= $errorMessage;
			$retorno->error_number 		= $errorMessage;
		return $retorno;
	}
}