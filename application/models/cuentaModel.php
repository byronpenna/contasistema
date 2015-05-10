<?php 
include_once(APPPATH.'models/padrem.php');
class CuentaModel extends Padrem
{
	function __construct()
	{
		parent::__construct();
	}
	public function getCuentas(){
		$query 		= $this->db->get('vw_cuentas');
		$resultado 	= $query->result();
		return $resultado;
	}
	public function ajax_eliminarCuenta($frm){
		//txtHdIdCuenta
		$data = array(
			'idCuenta' => $frm->txtHdIdCuenta
		);
		$retorno = $this->deleteDb("cuentas",$data);
		return $retorno;
	}
	public function agregarCuenta($frm){
		$data = array(
		   'numero' 			=> $frm->txtNumeroCuenta,
		   'nombre' 			=> $frm->txtNombreCuenta,
		   'descripcion' 		=> $frm->txtAreaDescrip,
		   'id_tipocuenta_fk' 	=> $frm->cbTipoCuenta
		);
		$retorno = $this->insertDb("cuentas",$data);
		return $retorno;
	}
}