<?php
class Socio_model extends CI_Model{

	public function listar($where=array()){
		return $this->db->get_where("Socio", $where)->result_array();
	}


	public function form($where=array()){
		return $this->db->get_where("Socio", $where)->result_array();
	}

	public function salvar($socio){
		$this->db->insert('Socio', $socio);
	}

	public function excluir($id){
		$this->db->where("idSocio", $id);
		$this->db->delete("Socio");
	}
}