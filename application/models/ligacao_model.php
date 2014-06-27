<?php
class Ligacao_model extends CI_Model{
	public function salvar($ligacao){
		$this->db->insert('Telefonema', $ligacao);
	}

	public function listar($where=array()){
		$this->db->select("Telefonema.*, Empresa.razaoSocial, Usuario.login");
		$this->db->from("Telefonema");
		$this->db->join("Empresa", "Empresa.IdEmpresa = Telefonema.Empresa_IdEmpresa", "Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
		$this->db->join("Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
		return $this->db->get()->result_array();
	}

	public function buscaUsuario(){

	}
}
?>