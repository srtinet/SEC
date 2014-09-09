<?php

class Pedido_model extends CI_Model{
	public function listar($where=array()){
		// $this->db->select("Pedido.*, Pedido_has_Servico.*, Pedido_has_Produto.*");
		// $this->db->from("Pedido");
		// $this->db->join("Pedido_has_Produto", "Pedido_has_Produto.Pedido_idPedido = Pedido.idPedido");
		// $this->db->join("Pedido_has_Servico", "Pedido_has_Servico.Pedido_idPedido = Pedido.idPedido");
		// $this->db->where($where);
		// return $this->db->get()->result_array();
		return $this->db->get_where("Pedido", $where)->result_array();
	}

	public function listarPedidoServico($where=array()){
		$this->db->select("Pedido_has_Servico.*, Servico.*");
		$this->db->from("Pedido_has_Servico");
		$this->db->join("Servico", "Pedido_has_Servico.Servico_idServico = Servico.idServico");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function listarPedidoProduto($where=array()){
		$this->db->select("Pedido_has_Produto.*, Produto.*, Pedido.*");
		$this->db->from("Pedido_has_Produto");
		$this->db->join("Produto", "Pedido_has_Produto.Produto_idProduto = Produto.idProduto");
		$this->db->join("Pedido", "Pedido_has_Produto.Pedido_idPedido = Pedido.idPedido");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function salvarPedido($pedido){
		if ($pedido['idPedido']>0){
			$this->db->where("idPedido",$pedido['idPedido']);
			$this->db->update("Pedido",$pedido);
			// return 0;

		}else{
			$this->db->insert("Pedido",$pedido);
			// return $this->db->insert_id();
		}
	}

	public function salvarPedidoHasProduto($pedido_has_produto){
		// if ($pedido['idPedido']>0){
		// 	$this->db->where("idPedido",$pedido['idPedido']);
		// 	$this->db->update("Pedido",$pedido);
		// 	// return 0;

		// }else{
			$this->db->insert("Pedido_has_Produto",$pedido_has_produto);
			// return $this->db->insert_id();
		// }
	}
}