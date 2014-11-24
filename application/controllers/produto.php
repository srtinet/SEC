<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produto  extends CI_Controller{
	public function listar(){
		$this->load->model("produto_model");
		$produto = $this->produto_model->listar();
		$dados = array('produtos'=>$produto);
		$this->load->template("produto/lista", $dados);
	}

	public function form($id=0){
		$this->load->model("produto_model");
		$produto=$this->produto_model->listar(array("idProduto"=>$id));
		$dados = array('produtos'=>$produto);
		$this->load->template("produto/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("produto_model");
		$produto = array(
			"idProduto" => $this->input->post('idProduto'),
			"descricaoProduto" => $this->input->post('descricaoProduto'),
			"tipoProduto" => $this->input->post('tipoProduto'),
			"estoqueMinimo" => $this->input->post('estoqueMinimo'),
			"estoqueMaximo" => $this->input->post('estoqueMaximo'),
			"unidadeProduto" => $this->input->post('unidadeProduto')
			);
		$this->produto_model->salvar($produto);
		$this->session->set_flashdata('success',"Produto Cadastrado com Sucesso");
		redirect("produto/listar");
	}

	public function excluir($id){
		$this->load->model("produto_model");
		$produto=$this->produto_model->excluir($id);
		$this->session->set_flashdata('success',"Produto Excluído com Sucesso");
		redirect('produto/listar');
	}


	public function excluir2($id){
		$this->load->model("produto_model");
		$produto=$this->produto_model->excluir($id);
		$this->session->set_flashdata('success',"Produto Excluído com Sucesso");
		redirect('produto/listar');
	}

	public function excluir3($id){
		$this->load->model("produto_model");
		$produto=$this->produto_model->excluir($id);
		$this->session->set_flashdata('success',"Produto Excluído com Sucesso");
	}
}