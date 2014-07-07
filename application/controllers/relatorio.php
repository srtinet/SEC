<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relatorio extends CI_Controller{


	public function index(){
		// $this->load->model("relatorio_model");
		$this->load->model("empresa_model");
		$this->load->model("usuarios_model");
		$this->load->model("ligacao_model");
		$empresa = $this->empresa_model->listar();
		$usuario = $this->usuarios_model->listar();
		$ligacao = $this->ligacao_model->listar();
		$dados = array(
			"empresas"=>$empresa,
			"usuario"=>$usuario,
			"ligacao"=>$ligacao);
		$this->load->template("relatorio/relatorio", $dados);
}
}