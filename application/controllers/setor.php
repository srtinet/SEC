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

	public function cadastrar($id=0){
		$this->form_validation->set_rules("descricao", "Descrição", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
			$this->load->model("setor_model");
			$setor = array("descricao" => $this->input->post("descricao"), "idSetor" => $this->input->post("idSetor"));
			$this->setor_model->salvar($setor);
			$this->session->set_flashdata('success', 'Cadastrado com Sucesso');
			redirect("setor/listar");
		}else{
			$this->load->model("setor_model");
			$setor = $this->setor_model->listar(array("idSetor" => $id));
			$dados = array("setor" => $setor);
			$this->load->template("setor/form", $dados);
		}
	}

		public function excluir($id){
			$this->load->model("setor_model");
			$this->setor_model->excluir($id);
			$this->session->set_flashdata('success', 'Excluido com Sucesso');
			redirect("setor/listar");
		}
	}

