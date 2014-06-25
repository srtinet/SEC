<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setor extends CI_Controller{
	
	public function listar(){
		$this->load->model("setor_model");
		$setor = $this->setor_model->listar();
		$dados = array("setor" => $setor);
		$this->load->template("setor/lista", $dados);
	}

	public function form($id=0){
		$this->load->model("setor_model");
		$setor = $this->setor_model->listar(array("idSetor" => $id));
		$dados = array("setor" => $setor);
		$this->load->template("setor/form", $dados);

	}

	public function cadastrar(){
		$this->load->model("setor_model");
		$setor = array("descricao" => $this->input->post("descricao"), "idSetor" => $this->input->post("idSetor"));
		$this->setor_model->salvar($setor);
		$this->session->set_flashdata('success', 'Cadastrado com Sucesso');
		redirect("setor/listar");
	}

	public function excluir($id){
		$this->load->model("setor_model");
		$this->setor_model->excluir($id);
		$this->session->set_flashdata('success', 'Excluido com Sucesso');
		redirect("setor/listar");
	}
}

