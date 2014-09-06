<?php 
class Atividade_model extends CI_Model {


public function listar($where=array()){
	$this->db->order_by("descricao", "asc");
	return $this->db->get_where("Atividade", $where)->result_array();


} 


	public function salvar ($atividade){
		if ($atividade['idAtividade']>0){
			$this->db->where("idAtividade",$atividade['idAtividade']);
			$this->db->update("Atividade",$atividade);

		}else{
			$this->db->insert("Atividade",$atividade);
		}

	}
	public function excluir($id){
			$this->db->where("idAtividade",$id);
		$this->db->delete('Atividade'); 

	}


}

