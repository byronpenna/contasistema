<?php 

class Cuentas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->load->model("cuentaModel");
	}
	function addCuenta(){
		$this->load->view("cuentas/nueva_cuenta.php");
	}
	function ajax_agregarCuenta(){
		$cuentaModel = new CuentaModel();
		$frm = json_decode($_POST["form"]);
		$resultado = $cuentaModel->agregarCuenta($frm);
	}
}