<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends CI_Controller{
	public function listar(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("fornecedor_model");
		$fornecedor = $this->fornecedor_model->listar();
		$dados = array('fornecedores'=>$fornecedor);
		$this->load->template("fornecedor/lista", $dados);
	}

	public function form($id=0){
		$this->load->model("fornecedor_model");
		$fornecedor=$this->fornecedor_model->listar(array("idFornecedor"=>$id));
		$dados = array('fornecedores'=>$fornecedor);
		$this->load->template("fornecedor/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("fornecedor_model");
		$fornecedor = array(
			"idFornecedor" => $this->input->post('idFornecedor'),
			"pontuacaoInicial" => $this->input->post('pontuacaoInicial'),
			"pontuacaoMinima" => $this->input->post('pontuacaoMinima'),
			"frequenciaAvaliacao" => $this->input->post('frequenciaAvaliacao'),
			"cep" => $this->input->post('cep'),
			"razaoSocial" => $this->input->post('razaoSocial'),
			"logradouro" => $this->input->post('logradouro'),
			"logradouroComercial" => $this->input->post('logradouroComercial'),
			"numero" => $this->input->post('numero'),
			"complemento" => $this->input->post('complemento'),
			"bairro" => $this->input->post('bairro'),
			"municipio" => $this->input->post('municipio'),
			"uf" => $this->input->post('uf'),
			"telefone" => $this->input->post('telefone'),
			"email" => $this->input->post('email')
			);
		$this->fornecedor_model->salvar($fornecedor);
		$this->session->set_flashdata('success',"Fornecedor Cadastrado com Sucesso");
		redirect("fornecedor/listar");
	}

	public function excluir($id){
		$this->load->model("fornecedor_model");
		$fornecedor=$this->fornecedor_model->excluir($id);
		$this->session->set_flashdata('success',"Fornecedor Excluído com Sucesso");
		redirect('fornecedor/listar');
	}	
}