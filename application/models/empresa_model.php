<?php 
class Empresa_model extends CI_Model {


public function listar($where=array()){
	return $this->db->get_where("Empresa", $where)->result_array();


} 
public function listarAtividade($where=array()){
	return $this->db->get_where("AtividadeEmpresa", $where)->result_array();


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

}