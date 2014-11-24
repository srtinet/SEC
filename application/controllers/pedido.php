<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido extends CI_Controller{
	public function listar(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("pedido_model");
		$pedido = $this->pedido_model->listar();
		$dados = array("pedidos"=>$pedido);
		$this->load->template("pedido/lista", $dados);
	}

	
	public function formPedido($id=0){
		$this->load->model("pedido_model");
		$pedido = $this->pedido_model->listar(array("idPedido"=>$id));
		$dados=array("pedidos"=>$pedido);
		$this->load->template("pedido/formPedido",$dados);
	}

	public function novoPedido(){
		$this->load->model("pedido_model");
		$data = date("Y/m/d");
		$usuario = $this->session->userdata['usuario_logado']['idUsuario'];
		$pedido = array(
			"descricao"=> $this->input->post("descricao"),
			"dataPedido"=> $data,
			"Usuario_idUsuario" => $usuario,
			"tipoPedido" => $this->input->post("tipoPedido"),
		);
		$idPedido = $this->pedido_model->novoPedido($pedido);
		$this->load->template("pedido/listaProdutoPedido/".$idPedido);
	}

	public function listarProdutoPedido($idPedido){
		$this->load->model("pedido_model");
		$this->load->model("produto_model");
		$produto = $this->produto_model->listar();
		$listaProduto = $this->pedido_model->listarProdutoPedido(array("Pedido_idPedido" => $idPedido));
		$dados = array("listaProdutos"=> $listaProduto, "produtos" => $produto);
		$this->load->template("pedido/listaProdutoPedido", $dados);
	}

	public function aceitarPedido($idPedido){
		$this->load->model("pedido_model");
		$this->pedido_model->aceitarOuRejeitarPedido(array("pedidoProdutoAprovado"=>1), $idPedido);
		$dados = array("listaProdutos"=> $listaProduto);
		$this->load->template("pedido/listaProdutoPedido", $dados);
	}

	public function rejeitarPedido($idPedido){
		$this->load->model("pedido_model");
		$this->pedido_model->aceitarOuRejeitarPedido(array("pedidoProdutoAprovado"=>0), $idPedido);
		$dados = array("listaProdutos"=> $listaProduto);
		$this->load->template("pedido/listaProdutoPedido", $dados);
	}
}