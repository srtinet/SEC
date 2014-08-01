<?php
class Socio_model extends CI_Model{

	public function listar($where=array()){

		$this->db->where($where);
		$this->db->order_by("nome", "asc");
		return $this->db->get("Socio")->result_array();
	}


	public function listarSocioEmpresa($where=array()){
		$this->db->select("Socio.nome,Socio.idSocio,Socio.inicioContribuicao,Socio.dependente, Socio.Empresa_idEmpresa,  Empresa.idEmpresa, Empresa.razaoSocial");
		$this->db->from("Socio");
		$this->db->join("Empresa", "Socio.Empresa_idEmpresa = Empresa.idEmpresa");
		$this->db->where($where);
		$this->db->order_by("nome", "asc");
		return $this->db->get()->result_array();
	}
	public function salvar ($socio){
		if ($socio['idSocio']>0){
			$this->db->where("idSocio",$socio['idSocio']);
			$this->db->update("Socio",$socio);

		}else{
			$this->db->insert("Socio",$socio);
		}

	}

	public function excluir($id){
		$this->db->where("idSocio", $id);
		$this->db->delete("Socio");
	}
}