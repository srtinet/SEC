<?php
class Pedido_model extends CI_Model{
	public function listar($where=array()){
		return $this->db->get_where("Pedido", $where)->result_array();
	}
}