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
		public function diario(){
			$this->load->view("libros/diario.php");
		}
	// ajax 
		public function getPartidasFecha(){
			$this->load->model("partidaModel");
			$retorno 		= new stdClass();
			$partidaModel 	= new PartidaModel();
			$frm 			= $this->getAjaxFrm();
			$where = array(
				'fecha' => $frm->fecha
			);
			$partidas = $partidaModel->ajax_getPartidasFecha($where);
			$retorno->estado 	= true;
			$retorno->partidas 	= $partidas;
			echo json_encode($retorno);

		}
		public function getCuentasFromTipo(){
			$this->load->model("cuentaModel");
			$cuentaModel 	= new CuentaModel();
			$frm 			= $this->getAjaxFrm();
			$where 			= array('id_tipoCuenta_fk' => $frm->idTipoCuenta ); 
			$respuesta 		= $cuentaModel->getCuentasWhere($where);
			echo json_encode($respuesta);
		}
		public function getLibroMayor(){
			/*$frm 			= new stdClass();
			$frm->idCuenta 	= 7;*/
			$frm 			= $this->getAjaxFrm(); 
			$respuesta 		= $this->_model->getLibroMayor($frm);
			echo json_encode($respuesta);
		}
}