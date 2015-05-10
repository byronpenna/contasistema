<?php 
class Padre extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function resultadoCorrecto($respuesta){
		if($respuesta->flag && $respuesta->num_afected > 0 && $respuesta->error_number == ""){
			return true;
		}else{
			return false;
		}
	}
	function getAjaxFrm(){
		$frm = json_decode($_POST["form"]);
		return $frm;
	}
}