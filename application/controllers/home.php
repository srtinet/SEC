<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{


	public function index(){
		$usuario=$this->session->userdata("usuario_logado");
		$this->load->template("index");
	}
}

?>