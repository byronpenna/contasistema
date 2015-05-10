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
	public function agregarPartida(){
		$this->load->model("cuentaModel");
		$cuentasModel = new CuentaModel();
		$data = array(
			'cuentas' => $cuentasModel->getCuentas()
		);
		$this->load->view("partidas/nueva_partida.php",$data);
	}
}