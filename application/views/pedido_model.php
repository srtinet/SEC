<?php
class Pedido_model extends CI_Model{
	public function listar($where=array()){
		return $this->db->get_where("Pedido", $where)->result_array();
	}
	public function listar($where=array()){
		return $this->db->get_where("Pedido", $where)->result_array();
	}
	public function salvarPedido($pedido){
		$this->db->insert("Pedido",$pedido);
		return $this->db->insert_id();
	}

	public function salvarPedidoHasProduto($pedido_has_produto){
		$this->db->insert("Pedido_has_Produto",$pedido_has_produto);

	}