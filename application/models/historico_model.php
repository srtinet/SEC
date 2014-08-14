<?php 
class Historico_model extends CI_Model {
	public function salvarHistorico($historico){
		$this->db->insert("Historico",$historico);
	}

	public function listar($where=array()){
		// $this->db->order_by("razaoSocial", "asc");
		// return $this->db->get_where("Historico", $where)->result_array();

		$this->db->select("Historico.*, Usuario.idUsuario, Usuario.nome, Empresa.idEmpresa, Empresa.razaoSocial");
		$this->db->from("Historico");
		$this->db->join("Empresa", "Empresa.idEmpresa = Historico.Empresa_idEmpresa");
		$this->db->join("Usuario", "Usuario.idUsuario = Historico.Usuario_idUsuario");
		// $this->db->order_by("razaoSocial", "asc");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}
}
