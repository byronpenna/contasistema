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
				'fecha' 		=> $frm->dtpFecha,
				'comentario'	=> $frm->txtDescripcionPartida
			);
			return $dataPartida;
		}
		public function getDetallePartida($asiento,$idPartida){
			$detalle = array(
				'monto' 			=> $asiento->txtHdMonto,
				'id_cuenta_fk' 		=> $asiento->txtHdIdCuenta,
				'id_partida_fk'		=> $idPartida,
				'id_tipoingreso_fk' => $asiento->txtHdTipoTrans
			);
			return $detalle;
			//return "";
		}
		public function getDataParcial($parcial,$idDetalle){
			$data = array(
				'descripcion' 	=> $parcial->txtHdDescripcion,
				'monto' 		=> $parcial->txtHdMonto,
				'id_detalle_fk' => $idDetalle
			);
			return $data;
		}
	// acciones 
		public function ajax_guardarPartida($frm){
			//$this->db->trans_strict(FALSE);
			$respuesta = new stdClass();
			$respuesta->estado = false;
			$this->db->trans_begin();
				// encabezado partida
					$dataPartida 	= $this->getDataPartida($frm->generales);
					$this->db->insert("partidas",$dataPartida);
					$idPartida 		= $this->db->insert_id();
				// detalle de la partida
					foreach ($frm->asientos as $key => $asiento) {
						$data 			= $this->getDetallePartida($asiento,$idPartida);
						$this->db->insert("detalle_partida",$data);
						$idDetalle 		= $this->db->insert_id();
						foreach ($asiento->parciales as $key => $parcial) {
							$dataParcial 	= $this->getDataParcial($parcial,$idDetalle); 
							$this->db->insert("parcial",$dataParcial);
						}
					}
			if ($this->db->trans_status() === FALSE)
			{
			    $this->db->trans_rollback();
			    $respuesta->estado = false;
			}
			else
			{
			    $this->db->trans_commit();
			    $respuesta->estado = true;
			}
			return $respuesta;
		}
}