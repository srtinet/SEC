<?php
class Ligacao_model extends CI_Model{
	public function salvar($ligacao){
		$this->db->insert('Telefonema', $ligacao);
	}

	public function listar($where=array()){
		$this->db->select("Telefonema.*, Empresa.razaoSocial, Empresa.telefone, Empresa.telefoneResidencial, Usuario.nome");
		$this->db->from("Telefonema");
		$this->db->join("Empresa", "Empresa.IdEmpresa = Telefonema.Empresa_IdEmpresa");
		$this->db->join("Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}

	// public function listarTelefonista($where=array()){
	// 	$this->db->select("Telefonema.*, Empresa.razaoSocial, Usuario.login");
	// 	$this->db->from("Telefonema");
	// 	$this->db->join("Empresa", "Empresa.IdEmpresa = Telefonema.Empresa_IdEmpresa", "Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
	// 	$this->db->join("Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
	// 	return $this->db->get()->result_array();
	// }

	public function alteraEstado($estado){
		$this->db->where('idTelefonema', $estado['idTelefonema']);
		$this->db->update('Telefonema', $estado);

	}

	public function contLigacao($where=array()){
		$this->db->where($where);
		return $this->db->count_all_results("Telefonema");
	}


}
?>