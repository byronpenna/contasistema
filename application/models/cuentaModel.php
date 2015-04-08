<?php 
class CuentaModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function agregarCuenta(){
		$sql = "";
		$this->db->trans_start();
			$flag = $this->db->query();
		$this->db->trans_complete();
	}
}