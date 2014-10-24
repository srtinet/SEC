<?php
class Relatorio_model extends CI_Model {
	
	public function controle($where=array()){
		$this->db->order_by("data", "desc"); 
		$this->db->limit(1);
		return $this->db->get_where("Controle",$where)->row_array();
	}	
}