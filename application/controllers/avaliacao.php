<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Avaliacao extends CI_Controller{
	public function listar($idFornecedor){
		$this->output->enable_profiler(TRUE);
		$this->load->model("avaliacao_model");
		$avaliacao = $this->avaliacao_model->listar(array("idFornecedor"=>$idFornecedor));
		$dados = array('avaliacoes'=>$avaliacao, "idFornecedor" => $idFornecedor);
		$this->load->template("avaliacao/lista", $dados);
	}

	public function form($idFornecedor, $id=0){
		$this->load->model("avaliacao_model");
		$this->load->model("fornecedor_model");
		$fornecedor = $this->fornecedor_model->listar();
		$avaliacao=$this->avaliacao_model->listar(array("idAvaliacao"=>$id));
		$dados = array('fornecedores'=> $fornecedor, 'avaliacoes'=>$avaliacao,'idFornecedor'=> $idFornecedor);
		$this->load->template("avaliacao/form", $dados);
	}

	public function cadastrar($idFornecedor=0, $id=0){
		$this->load->model("avaliacao_model");
		$avaliacao = array(
			"idAvaliacao" => $this->input->post('idAvaliacao'),
			"Fornecedor_idFornecedor" => $this->input->post('idFornecedor'),
			"dataAvaliacao" => dataPtBrParaMysql($this->input->post('dataAvaliacao')),
			"observacao" => $this->input->post('observacao'),
			"quantidadeNC" => $this->input->post('quantidadeNC')
			);
		$this->avaliacao_model->salvar($avaliacao);
		$this->session->set_flashdata('success',"Avaliação Cadastrada com Sucesso");
		redirect("avaliacao/listar/".$this->input->post("idFornecedor"));
	}

	public function excluir($id){
		$this->load->model("avaliacao_model");
		$avaliacao=$this->avaliacao_model->excluir($id);
		$this->session->set_flashdata('success',"Avaliação Excluída com Sucesso");
		redirect('avaliacao/listar');
	}	
}