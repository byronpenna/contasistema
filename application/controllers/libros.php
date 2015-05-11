<?php 
include_once(APPPATH.'controllers/padre.php');
class Libros extends Padre
{
	
	private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("librosModel");
		$this->_model = new LibrosModel();
	}
	// views 
		public function mayor(){
			$this->load->view("libros/mayor.php");
		}
	// ajax 
		public function getCuentasFromTipo(){
			$this->load->model("cuentaModel");
			$cuentaModel 	= new CuentaModel();
			$frm 			= $this->getAjaxFrm();
			$where 			= array('id_tipoCuenta_fk' => $frm->idTipoCuenta ); 
			$respuesta 		= $cuentaModel->getCuentasWhere($where);
			echo json_encode($respuesta);
		}
		public function getLibroMayor(){
			$frm 			= new stdClass();
			$frm->idCuenta 	= 7;
			$respuesta 		= $this->_model->getLibroMayor($frm);
			echo "<pre>".json_encode($respuesta)."</pre>";
		}
}