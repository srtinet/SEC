<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pedido  extends CI_Controller{
	public function listar(){
		$this->load->model("pedido_model");
		$this->load->model("produto_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto();
		$pedidoS = $this->pedido_model->listarPedidoServico();
		$pedido = $this->pedido_model->listar();
		$produto = $this->produto_model->listar();
		$dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP,"produtos" => $produto);
		// $dados = array("pedidos"=>$pedido, "produtos" => $produto);
		$this->load->template("pedido/lista", $dados);
	}

	public function listarPedidoProduto($idPedido){
		$this->load->model("pedido_model");
		// $this->load->model("produto_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto(array("Pedido_idPedido"=>$idPedido));
		// $pedidoS = $this->pedido_model->listarPedidoServico();
		// $pedido = $this->pedido_model->listar();
		// $produto = $this->produto_model->listar();
		// $dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP, "pedidos"=>$pedido, "produtos" => $produto);
		$dados = array("pedidos"=>$pedido, "produtos" => $produto);
		$this->load->template("pedido/lista", $dados);
	}

	public function formPedidoProduto($id=0){
		$this->load->model("pedido_model");
		$this->load->model("produto_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto(array("Pedido_idPedido" => $id));
		// $pedidoS = $this->pedido_model->listarPedidoServico(array("Pedido_idPedido" => $id));
		$produto = $this->produto_model->listar();
		$dados = array("pedidosP"=>$pedidoP, "produtos" => $produto);
		$this->load->template("pedido/formPedidoProduto", $dados);
	}

	public function formPedidoServico(){
		$this->load->model("pedido_model");
		$pedidoP = $this->pedido_model->listarPedidoProduto();
		$pedidoS = $this->pedido_model->listarPedidoServico();
		$dados = array("pedidosS"=>$pedidoS, "pedidosP"=>$pedidoP);
		$this->load->template("pedido/formPedidoServico", $dados);
	}

	public function cadastrarPedidoProduto($idFornecedor=0, $id=0){
		$this->load->model("pedido_model");
		$usuario = $this->session->userdata['usuario_logado'];
		$data = date("Y/m/d");
		$pedido = array(
			"idPedido" => $this->input->post('idPedido'),
			"Usuario_idUsuario" => $usuario['idUsuario'],
			"dataPedido" => $data
		);
		$retorno = $this->pedido_model->salvarPedido($pedido);
		$pedido_has_produto = array(
			"Produto_idProduto" => $this->input->post('Produto_idProduto'),
			"Pedido_idPedido" => $retorno,
			"quantidadeProduto" => $this->input->post('quantidadeProduto')
			);
		$this->pedido_model->salvarPedidoHasProduto($pedido_has_produto);
		$this->session->set_flashdata('success',"Pedido Salvo e passando por Aprovação");
		if ($usuario['financeiro'] == 1) {
			redirect("pedido/listar");
		}else{
			redirect("/");
		}
	}
}
