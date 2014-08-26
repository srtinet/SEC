<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pedido  extends CI_Controller{
	public function listar(){
		$this->load->model("pedido_model");
		$this->load->model("produto_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto();
		$pedidoS = $this->pedido_model->listarPedidoServico();
		$produto = $this->produto_model->listar();
		$dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP, "produtos" => $produto);
		$this->load->template("pedido/lista", $dados);
	}

	public function formPedidoProduto($id=0){
		$this->load->model("pedido_model");
		$this->load->model("produto_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto(array("Pedido_idPedido" => $id));
		$pedidoS = $this->pedido_model->listarPedidoServico(array("Pedido_idPedido" => $id));
		$produto = $this->produto_model->listar();
		$dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP, "produtos" => $produto);
		$this->load->template("pedido/formPedidoProduto", $dados);
	}

	public function formPedidoServico(){
		$this->load->model("pedido_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto();
		$pedidoS = $this->pedido_model->listarPedidoServico();
		$dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP);
		$this->load->template("pedido/formPedidoServico", $dados);
	}
}
