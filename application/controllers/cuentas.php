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
			$cuentas = $this->getCuentas();
			$data = array(
				'cuentas' => $cuentas
			);
			$this->load->view("cuentas/nueva_cuenta.php",$data);
		}
	// gets
		public function getCuentas(){
			$cuentas = $this->_model->getCuentas();
			return $cuentas;
		}
	// acciones 
		public function ajax_eliminarCuenta(){
			$frm 				= $this->getAjaxFrm();
			$respuesta 			= $this->_model->ajax_eliminarCuenta($frm);
			$respuesta->estado	= $this->resultadoCorrecto($respuesta);
			echo json_encode($respuesta);
		}
		public function ajax_agregarCuenta(){
			$frm 					= $this->getAjaxFrm();
			$frm->txtAreaDescrip 	= nl2br($frm->txtAreaDescrip);
			$respuesta 				= $this->_model->agregarCuenta($frm);
			$respuesta->estado 		= $this->resultadoCorrecto($respuesta);
			echo json_encode($respuesta);
		}
}