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
		$this->db->where("Telefonema.Empresa_IdEmpresa = Empresa.IdEmpresa");
		$this->db->where("Telefonema.Usuario_IdUSuario = Usuario.IdUsuario");
		return $this->db->get()->result_array();
	}

	public function buscaUsuario(){

	}
	// public function buscaVendidos($usuario){
		// 	$id = $usuario["id"];
		// 	$this->db->select("produtos.*, vendas.data_de_entrega");
		// 	$this->db->from("produtos");
		// 	$this->db->join("vendas", "vendas.produto_id = produtos.id");
		// 	$this->db->where("vendido", true);
		// 	$this->db->where("usuario_id", $id);
		// 	return $this->db->get()->result_array();
		// }
}
?>