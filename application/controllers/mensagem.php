<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mensagem extends CI_Controller{

	public function listar($idRecado){
		$this->load->model("empresa_model");
		$this->load->model("usuarios_model");
		$empresa = $this->empresa_model->listar();
		$usuario=$this->usuarios_model->listar();
		$this->load->model("mensagem_model");
		$mensagem = $this->mensagem_model->listar(array("idRecado" => $idRecado));
		$dados = array("mensagens" => $mensagem, 'idRecado' => $idRecado, "empresas" => $empresa, "usuarios" => $usuario);
		$this->load->template("mensagem/lista", $dados);
	}

	public function cadastrarMensagem($idRecado){
		$this->load->model("mensagem_model");
		$this->load->model("recado_model");
		$mensagem = array(
			"Usuario_idUsuario" => $this->input->post("Usuario_idUsuario"),
			"Recado_idRecado" => $idRecado,
			"recado" => $this->input->post("recado"),
			"estado" => 0
			);
		$this->recado_model->salvarMensagem($mensagem);
		$this->session->set_flashdata('success',"Recado Salvo com Sucesso");
		redirect('recado/listarRecado');
	}
}