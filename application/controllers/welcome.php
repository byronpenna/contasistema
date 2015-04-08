<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$modelo = new WelcomeModel();
		$resultado = $modelo->logueo($frm);
		echo json_encode($resultado);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */