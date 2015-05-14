<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model("welcomeModel");
	}
	public function index()
	{
		$this->load->view('welcome/index.php');
	}
	public function ajax_login(){
		$frm = json_decode($_POST["form"]);
		$modelo = new welcomeModel();
		$resultado = $modelo->logueo($frm);
		echo json_encode($resultado);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */