<?php

class Recado_model extends CI_Model{
	public function listarRecado($where=array()){
		$this->db->select("Recado.*, Empresa.razaoSocial, Usuario.nome");
		$this->db->from("Recado");
		$this->db->join("Empresa", "Empresa.idEmpresa = Recado.Empresa_idEmpresa");
		$this->db->join("Usuario", "Usuario.idUsuario = Recado.IdUsuarioDestino");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function joinUsuarioDestino($where=array()){
		$this->db->select("Usuario.*, Recado.IdUsuarioDestino");
		$this->db->from("Usuario");
		$this->db->join("Recado", "Recado.IdUsuarioDestino = Usuario.idUSuario");
		$this->db->where($where);
		return $this->db->get()->row_array();
	}

	public function salvarMensagem($mensagem){
		$this->db->insert("Mensagem", $mensagem);
	}

	public function salvarRecado($recado){
		$this->db->insert("Recado", $recado);
		return $this->db->insert_id();
	}

}