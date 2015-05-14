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
		public function getTodaPartida($idPartida){
			$where 		= array('id' => $idPartida);
			$retorno 	= new stdClass();
			$this->db->trans_start();
				$headPartida 		= $this->db->get_where('partidas',$where);
				//$this->db->insert_id();
				$retorno->partida 	= $headPartida->result();
				$where 				= array('id_partida_fk' => $idPartida ); 
				$detallePartida 	= $this->db->get_where("vw_detallepartida",$where);
				$retorno->detalles 	= $detallePartida->result();
				foreach ($retorno->detalles as $key => $value) {
					$where = array(
						'id_detalle_fk' => $value->idDetalle
					);
					$parciales = $this->db->get_where("parcial",$where);
					$retorno->detalles[$key]->parciales = $parciales->result();
				}
			$this->db->trans_complete();
			return $retorno;
		}
	// acciones 
		public function ajax_getPartidasFecha($where){
			$this->db->trans_start();
				$query = $query = $this->db->get_where('partidas', $where);
				$retorno = $query->result();
			$this->db->trans_complete();
			return $retorno;
		}
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