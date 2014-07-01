<?php

class Recado_model extends CI_Model{
	public function listar($where=array()){
		$this->db->select("Recado.*, Empresa.razaoSocial, Usuario.nome");
		$this->db->from("Recado");
		$this->db->join("Empresa", "Empresa.idEmpresa = Recado.Empresa_idEmpresa");
		$this->db->join("Usuario", "Usuario.idUsuario = Recado.Usuario_IdUsuario");
		return $this->db->get()->result_array();
	}
}