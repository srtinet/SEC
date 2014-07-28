<?php 
class Anexo_model extends CI_Model {
	public function salvar($anexo){
		$this->db->insert("Anexo", $anexo);
	}
}