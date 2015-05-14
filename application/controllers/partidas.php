<?php 
include_once(APPPATH.'controllers/padre.php');
class Partidas extends Padre
{
	// propiedades 
		private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("partidaModel");
		$this->_model = new PartidaModel();
	}
	// views
		public function agregarPartida(){
			$this->load->model("cuentaModel");
			$cuentasModel = new CuentaModel();
			$data = array(
				'cuentas' => $cuentasModel->getCuentas()
			);
			$this->load->view("partidas/nueva_partida.php",$data);
		}
		public function getTodaPartida($idPartida){
			$partidas = $this->_model->getTodaPartida($idPartida);
			$data = array(
				'partidas' => $partidas
			);
			$this->load->view("partidas/detalle_partida.php",$data);
		}
	// ajax 
		public function ajax_guardarPartida(){
			$frm 		= $this->getAjaxFrm();
			$respuesta 	= $this->_model->ajax_guardarPartida($frm);
			//$respuesta  = "";
			echo json_encode($respuesta);
		}
}