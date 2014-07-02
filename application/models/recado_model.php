<?php

class Recado_model extends CI_Model{
	public function listarRecado($where=array()){
		$this->db->select("Recado.*, Empresa.razaoSocial, Usuario.nome");
		$this->db->from("Recado");
		$this->db->join("Empresa", "Empresa.idEmpresa = Recado.Empresa_idEmpresa");
		$this->db->join("Usuario", "Usuario.idUsuario = Recado.Usuario_IdUsuario");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function listarMensagem($where=array()){
		$this->db->select("Mensagem.*, Recado.idRecado");
		$this->db->from("Mensagem");
		$this->db->join("Recado", "Recado.idRecado = Mensagem.Recado_idRecado");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	public function listarEmpresa($where=array()){
		return $this->db->get_where("Empresa", $where)->result_array();
	}

	public function listarUsuario($where=array()){
		return $this->db->get_where("Usuario", $where)->result_array();
	}

	public function salvarMensagem($mensagem){
		$this->db->insert("Mensagem", $mensagem);
	}

	public function salvarRecado($recado){
		$this->db->insert("Recado", $recado);
	}

}