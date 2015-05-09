<?php 
include_once(APPPATH.'controllers/padre.php');
class Cuentas extends Padre
{
	// propiedades 
		private $_model;
	// constructores
		function __construct()
		{
			parent::__construct();	
			$this->load->model("cuentaModel");
			$this->_model = new CuentaModel();
		}
	// views 
		public function addCuenta(){
			$this->load->view("cuentas/nueva_cuenta.php");
		}
	// gets
		public function getCuentas(){

		}
	// acciones 
		public function ajax_agregarCuenta(){
			$frm = $this->getAjaxFrm();
			$frm->txtAreaDescrip = nl2br($frm->txtAreaDescrip);
			$respuesta = $this->_model->agregarCuenta($frm);
			echo json_encode($respuesta);
		}
}