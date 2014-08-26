<?php
class Avaliacao_model extends CI_Model {
	public function listar($where=array()){
		$this->db->select("Avaliacao.*, Fornecedor.*");
		$this->db->from("Avaliacao");
		$this->db->join("Fornecedor", "Fornecedor.idFornecedor = Avaliacao.Fornecedor_idFornecedor");
		$this->db->where($where);
		// $this->db->where();
		return $this->db->get()->result_array();
		// return $this->db->get_where("Avaliacao", $where)->result_array();
	}

	public function listarSocioEmpresa($where=array()){
		$this->db->select("Socio.nome,Socio.idSocio,Socio.inicioContribuicao,Socio.dependente, Socio.Empresa_idEmpresa,  Empresa.idEmpresa, Empresa.razaoSocial");
		$this->db->from("Socio");
		$this->db->join("Empresa", "Socio.Empresa_idEmpresa = Empresa.idEmpresa");
		$this->db->where($where);
		$this->db->order_by("nome", "asc");
		return $this->db->get()->result_array();
	}

	// public function listar($where=array()){
	// 	$this->db->select("Telefonema.*, Empresa.razaoSocial, Empresa.telefone, Empresa.telefoneResidencial, Usuario.nome");
	// 	$this->db->from("Telefonema");
	// 	$this->db->join("Empresa", "Empresa.IdEmpresa = Telefonema.Empresa_IdEmpresa");
	// 	$this->db->join("Usuario", "Usuario.IdUsuario = Telefonema.Usuario_IdUsuario");
	// 	$this->db->where($where);
	// 	return $this->db->get()->result_array();
	// }

	public function salvar ($avaliacao){
		if ($avaliacao['idAvaliacao']>0){
			$this->db->where("idAvaliacao",$avaliacao['idAvaliacao']);
			$this->db->update("Avaliacao",$avaliacao);
			// return 0;

		}else{
			$this->db->insert("Avaliacao",$avaliacao);
			// return $this->db->insert_id();
		}

	}
	public function excluir($id, $where=array()){
		$this->db->where('idAvaliacao', $id);
		$this->db->delete('Avaliacao');
	}
}