<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Atividade extends CI_Controller{

	public function listar() {

		$this->load->model("atividade_model");
		$atividade=$this->atividade_model->listar();
		$dados=array("atividades"=>$atividade);
		$this->load->template("atividade/lista",$dados);

	}

	public function form($id=0){
		$this->load->model("atividade_model");
		$atividade=$this->atividade_model->listar(array("idAtividade"=>$id));
		$dados=array("atividades"=>$atividade);
		$this->load->template("atividade/form",$dados);
	}

	public function cadastrar($id=0){
		$this->form_validation->set_rules("descricao", "Descrição", "required");
		$this->form_validation->set_rules("nivel", "nivel", "required");
		$this->form_validation->set_rules("anexo", "anexo", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
			$this->load->model("atividade_model");
			$atividade=array(
				"idAtividade" => $this->input->post("idAtividade"),
				"descricao" => $this->input->post("descricao"),
				"nivel" => $this->input->post("nivel"),
				"anexo" => $this->input->post("anexo"));
			$this->atividade_model->salvar($atividade);
			$this->session->set_flashdata('success',"Atividade salvo com sucesso");
			redirect('atividade/listar');
		}else{
			$this->load->model("atividade_model");
			$atividade=$this->atividade_model->listar(array("idAtividade"=>$id));
			$dados=array("atividades"=>$atividade);
			$this->load->template("atividade/form",$dados);
		}
	}

		public function excluir($id){
			$this->load->model("atividade_model");
			$this->atividade_model->excluir($id);
			$this->session->set_flashdata('success', 'Excluido com Sucesso');
			redirect("atividade/listar");
		}


	}