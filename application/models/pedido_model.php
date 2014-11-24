<?php 
class Pedido_model extends CI_Model {
	public function listar($where=array()){
		$this->db->select("Pedido.*, Pedido_has_Produto.*, Usuario.nome, Usuario.idUsuario");
		$this->db->from("Pedido");
		$this->db->join("Usuario", "Usuario.idUsuario = Pedido.Usuario_idUsuario");
		$this->db->join("Pedido_has_Produto", "Pedido_has_Produto.Pedido_idPedido = Pedido.idPedido");
		// $this->db->join("Pedido_has_Servico", "Pedido_has_Servico.Pedido_idPedido = Pedido.idPedido");
		$this->db->where($where);
		return $this->db->get()->result_array();
		// return $this->db->get_where("Pedido",$where)->result_array();
	}

	public function listarProdutoPedido($where=array()){
		// return $this->db->get_where("Pedido_has_Produto", $where)->result_array();
		$this->db->select("Produto.*, Pedido_has_Produto.*");
		$this->db->from("Pedido_has_Produto");
		$this->db->join("Produto", "Produto.idProduto = Pedido_has_Produto.Produto_idProduto");
		$this->db->where($where);
		return $this->db->get()->result_array();
		
	}

	public function aceitarOuRejeitarPedido($where=array(), $idPedido){
		$this->db->where("Pedido_idPedido", $idPedido);
		$this->db->update("Pedido_has_Produto", $where);
	}

	public function novoPedido($where=array()){
		$this->db->insert("Pedido", $where);
		return $this->db->insert_id();
	}
}

