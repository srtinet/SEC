<?php 
class Agenda_model extends CI_Model {
	public function listar($where=array()){
		$this->db->order_by("Nome", "asc");
		return $this->db->get_where("Agenda", $where)->result_array();
	}
}