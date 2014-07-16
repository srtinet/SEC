<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{


	public function index(){
		$usuario=$this->session->userdata("usuario_logado");
		if($usuario["telefonista"] != 1){
			redirect('responsabilidade/validar');
		}else{
			redirect('ligacao/listarTelefonista');
		}
		
	}
}

?>