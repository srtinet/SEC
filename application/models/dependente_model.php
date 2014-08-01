<?php
class Dependente_model extends CI_Model {
	public function listarDependente($where=array()){
		$this->db->select("Dependente.nome, Dependente.idDependente, Dependente.dataNascimento, Dependente.Socio_idSocio, Socio.idSocio");
		$this->db->from("Dependente");
		$this->db->join("Socio", "Dependente.Socio_idSocio = Socio.idSocio");
		$this->db->where($where);
		// $this->db->order_by("nome", "asc");
		return $this->db->get()->result_array();
	}

	public function listar($where=array()){
		return $this->db->get_where("Dependente", $where)->result_array();
	}

	public function salvar($dependente){
		if($dependente['idDependente']>0){
			$this->db->where("idDependente", $dependente['idDependente']);
			$this->db->update("Dependente", $dependente);
		}else{
			$this->db->insert("Dependente", $dependente);
		}
	}

// 	public function pegaIdade($where = array()){
// 		return $this->db->select("Dependente", $where)->result_array();
// 	}

// 	public function atualizaAtivo($where = array()){
// 		$this->db->where("idDependente", $where);
// 		$this->db->update("Dependente", $where);
// 	}
}