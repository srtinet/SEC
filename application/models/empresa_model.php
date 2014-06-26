<?php 
class Empresa_model extends CI_Model {


	public function listar($where=array()){
		return $this->db->get_where("Empresa", $where)->result_array();


	} 
	public function listarAtividade($where=array()){
		return $this->db->get_where("AtividadeEmpresa", $where)->result_array();


	} 

	public function listarAtividadeJoin($where=array()){

		$this->db->select("AtividadeEmpresa.*, Empresa.razaoSocial,Setor.descricao as setorDescricao , Atividade.descricao as atividadeDescricao");
		$this->db->from("AtividadeEmpresa");
		$this->db->join("Empresa", "Empresa.idEmpresa = AtividadeEmpresa.Empresa_idEmpresa");
		$this->db->join("Setor", "Setor.idSetor = AtividadeEmpresa.Setor_idSetor");
		$this->db->join("Atividade", "Atividade.idAtividade = AtividadeEmpresa.Atividade_idAtividade");
		$this->db->where($where);

		return $this->db->get()->result_array();
	}


	public function salvar ($empresa){
		if ($empresa['idEmpresa']>0){
			$this->db->where("idEmpresa",$empresa['idEmpresa']);
			$this->db->update("Empresa",$empresa);

		}else{
			$this->db->insert("Empresa",$empresa);
		}

	}
	public function excluir($id){
		$this->db->where("idEmpresa",$id);
		$this->db->delete('Empresa'); 

	}

	public function cadAtividade($atividade){

			if ($atividade['idAtividadeEmpresa']>0){
			$this->db->where("idAtividadeEmpresa",$atividade['idAtividadeEmpresa']);
			$this->db->update("AtividadeEmpresa",$atividade);

		}else{
		$this->db->insert("AtividadeEmpresa",$atividade);

}
	}


}