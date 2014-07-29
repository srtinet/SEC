<?php 
class Observacao_model extends CI_Model {
	public function salvar($observacao){
		$this->db->insert("Observacao", $observacao);
	}
}