<?php

class Mensagem_model extends CI_Model{
	
	public function listar($where=array()){
		$this->db->select("Mensagem.*, Recado.idRecado");
		$this->db->from("Mensagem");
		$this->db->join("Recado", "Mensagem.Recado_idRecado = Recado.idRecado");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}
}