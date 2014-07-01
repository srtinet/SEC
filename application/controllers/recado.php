<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recado extends CI_Controller{
	public function listar(){
		$usuario = $this->session->userdata['usuario_logado'];
		$this->load->model("recado_model");
		$recado = $this->recado_model->listar(array("Usuario_idUsuario" => $usuario['idUsuario']));
		$dados = array("recados" => $recado);
		$this->load->template("recado/lista", $dados);
	}
	public function form(){
		$this->load->model("recado_model");
		// $this->recado_model->form();
		$this->load->template("recado/form");

	}
}