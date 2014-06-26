<?php 
class Setor_model extends CI_Model {
	public function listar($where=array()){
		return $this->db->get_where("Setor", $where)->result_array();
	}

	public function excluir($id){
		$this->db->where('idSetor', $id);
		$this->db->delete("Setor");
	}

	public function salvar($setor){
		if($setor['idSetor'] > 0){
			$this->db->where('idSetor', $setor['idSetor']);
			$this->db->update('Setor', $setor);
		}else{
			$this->db->insert('Setor', $setor);	
		}
		
	}

}