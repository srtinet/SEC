<?php 
class Observacao_model extends CI_Model {
	public function salvar($observacao){
		$this->db->insert("Observacao", $observacao);
	}

	public function listarUsuarioObservacao($where=array()){
		$this->db->select("Observacao.*, Usuario.idUsuario, Usuario.nome");
		$this->db->from("Observacao");
		$this->db->join("Usuario", "Usuario.idUsuario = Observacao.Usuario_idUsuario");
		$this->db->where($where);
		
		return $this->db->get()->result_array();
	}
}

