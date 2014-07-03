<?php

class Mensagem_model extends CI_Model{
	
	public function listar($where=array()){
		$this->db->select("Mensagem.*, Recado.idRecado,remetente.nome as nomeRemetente,remetente.idUsuario as idRemetente,destinatario.idUsuario as idDestinatario, destinatario.nome as nomeDestinatario");
		$this->db->from("Mensagem");
		$this->db->join("Recado", "Mensagem.Recado_idRecado = Recado.idRecado");
		$this->db->join("Usuario as remetente", "remetente.idUsuario = Mensagem.Usuario_IdUsuarioRem");
		$this->db->join("Usuario as destinatario", "destinatario.idUsuario = Mensagem.Usuario_IdUsuarioDes");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function selectMensagem($where=array()){
		$this->db->where($where);
		$this->db->order_by("idMensagem", "desc"); 
		$this->db->limit(1);
		return $this->db->get("Mensagem")->row_array();
	}
}