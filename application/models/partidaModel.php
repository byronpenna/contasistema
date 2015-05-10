<?php 
include_once(APPPATH.'models/padrem.php');
class PartidaModel extends Padrem
{
	
	function __construct()
	{
		parent::__construct();
	}
	// generic 
		public function getDataPartida($frm){
			$dataPartida = array(
				'fecha' 		=> $frm->generales->dtpFecha,
				'comentario'	=> $frm->generales->txtDescripcionPartida
			);
			return $dataPartida;
		}
	// acciones 
		public function ajax_guardarPartida($frm){
			$this->db->trans_begin();
				$dataPartida = $this->getDataPartida();
				$this->db->insert("partidas",$dataPartida);
				$insertId = $this->db->insert_id();
				
		}
}