<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_loader extends CI_Loader{


	public function template($nome,$dados=array()){

		$this->view("cabecalho.php");
		$CI =& get_instance();
		$usuario=$CI->session->userdata("usuario_logado");
		if ($usuario){
			$this->view("menu.php");
			$this->view("menuLateral.php");
			$this->view("notificacao.php");

			$this->view($nome,$dados);
		}else {
			$this->view("login/logar");

		}

		$this->view("rodape.php");

	}




}