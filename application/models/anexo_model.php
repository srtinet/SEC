<?php 
class Anexo_model extends CI_Model {
	public function salvar($anexo){
		$this->db->insert("Anexo", $anexo);
	}

	public function listarAnexo($where=array()){
		$this->db->select("caminho, descricao");
		return $this->db->get_where("Anexo", $where)->result_array();
	}
	
}