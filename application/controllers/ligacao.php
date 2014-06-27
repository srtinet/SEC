<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ligacao extends CI_Controller{
	public function form($id=0){
		$this->load->model("empresa_model");
		$empresa = $this->empresa_model->listar();
		$dados = array("empresa" => $empresa);
		$this->load->template("ligacao/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("ligacao_model");
		$ligacao = array(
			"Empresa_IdEmpresa" => $this->input->post('Empresa_idEmpresa'),
			 "Usuario_idUsuario" => $this->input->post('Usuario_idUsuario'),
			 "estado" => $this->input->post('estado'),
			 "observacao" => $this->input->post('observacao')
		);
		$this->ligacao_model->salvar($ligacao);
		$this->session->set_flashdata('success', 'Solicitado com Sucesso');
		redirect("ligacao/listar");
	}

	public function listar(){
		$this->load->model("ligacao_model");
		$ligacao = $this->ligacao_model->listar();
		$dados = array("ligacao" => $ligacao);
		$this->load->template("ligacao/lista", $dados);
	}

		// public function buscar(){
		// 	$this->load->model("ligacao_model");
		// 	$ligacao->$this->ligacao_model->BuscaUsuario();
		// }


}