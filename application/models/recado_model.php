<?php

class Recado_model extends CI_Model{
	public function listarRecado($where=array()){
		$this->db->select("Mensagem.*,Recado.*,remetente.nome as nomeRemetente,remetente.idUsuario,destinatario.idUSuario , destinatario.nome as nomeDestinatario, Empresa.razaoSocial");
		$this->db->from("Recado");
		$this->db->join("Mensagem", "Mensagem.Recado_idRecado = Recado.idRecado");
		$this->db->join("Empresa", "Empresa.idEmpresa = Recado.Empresa_idEmpresa");
		$this->db->join("Usuario as remetente", "remetente.idUsuario = Mensagem.Usuario_IdUsuarioRem");
		$this->db->join("Usuario as destinatario", "destinatario.idUsuario = Mensagem.Usuario_IdUsuarioDes");
		$this->db->where('estado',0);
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	// public function joinUsuarioDestino($where=array()){
	// 	$this->db->select("Usuario.*, Recado.IdUsuarioDestino");
	// 	$this->db->from("Usuario");
	// 	$this->db->join("Recado", "Recado.IdUsuarioDestino = Usuario.idUSuario");
	// 	$this->db->where($where);
	// 	return $this->db->get()->row_array();
	// }

	public function salvarMensagem($mensagem){
		if ($mensagem['idMensagem']>0){
			$this->db->where("idMensagem",$mensagem['idMensagem']);
			$this->db->update("Mensagem",$mensagem);
		}else{
			$this->db->insert("Mensagem", $mensagem);
		}
	}

	public function salvarRecado($recado){
		$this->db->insert("Recado", $recado);
		return $this->db->insert_id();
	}

	public function contRecado($where=array()){

		$this->db->where($where);
		return $this->db->count_all_results("Recado");
	}

}