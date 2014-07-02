<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recado extends CI_Controller{
	public function listarRecado($idUsuarioDestino){
		$usuario = $this->session->userdata['usuario_logado'];
		$this->load->model("recado_model");
		$recado = $this->recado_model->listarRecado(array("Usuario_idUsuario" => $usuario['idUsuario'], "idUsuarioDestino" => $idUsuarioDestino));
		$dados = array("recados" => $recado);
		$this->load->template("recado/lista", $dados);
	}


	public function form(){
		$this->load->model("empresa_model");
		$this->load->model("usuarios_model");
		$empresa = $this->empresa_model->listar();
		$usuario = $this->usuarios_model->listar();
		$dados = array("empresas" => $empresa, "usuarios" => $usuario);
		$this->load->template("mensagem/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("recado_model");
		$usuario = $this->session->userdata('usuario_logado');
		$recado = array(
			"Usuario_idUsuario" => $usuario['idUsuario'],
			"idUsuarioDestino" => $this->input->post("Usuario_idUsuario"),
			"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
			"dataAbertura" => date("Y-m-d")
			);
		$idRecado = $this->recado_model->salvarRecado($recado);
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