<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recado extends CI_Controller{
	public function listarRecado(){
		$usuario = $this->session->userdata['usuario_logado'];
		$this->load->model("recado_model");
		$recado = $this->recado_model->listarRecado(array("Usuario_idUsuario" => $usuario['idUsuario']));
		$dados = array("recados" => $recado);
		$this->load->template("recado/lista", $dados);
	}

	public function listarMensagem($idRecado){
		$this->load->model("recado_model");
		$recado = $this->recado_model->listarMensagem(array("idRecado" => $idRecado));
		$dados = array("recados" => $recado);
		$this->load->template("mensagem/lista", $dados);
	}
	public function form(){
		$this->load->model("recado_model");
		// $this->recado_model->form();
		$empresaRecado = $this->recado_model->listarEmpresa();
		$usuario = $this->recado_model->listarUsuario();
		$dados = array("empresas" => $empresaRecado, "usuarios" => $usuario);
		$this->load->template("mensagem/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("recado_model");
		$mensagem = array(
			"idMensagem" => $this->input->post("idMensagem"),
			"Usuario_idUsuario" => $this->input->post("usuario"),
			"recado" => $this->input->post("recado"),
			"estado" => $this->input->post("estado")
		);
		$recado = array(
			"idRecado" => $this->input->post("idRecado"),
			"Usuario_idUsuario" => $this->input->post("usuario"),
			"Empresa_idEmpresa" => $this->input->post("empresa"),
			"dataAbertura" => $this->input->post("dataAbertura")
		);
		$this->recado_model->salvarMensagem($mensagem);
		$this->recado_model->salvarRecado($recado);
		$this->session->set_flashdata('success',"Recado Salvo com Sucesso");
		redirect('recado/listar');
	}


}