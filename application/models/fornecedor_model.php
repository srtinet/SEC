<?php
class Fornecedor_model extends CI_Model {
	public function listar($where=array()){
		return $this->db->get_where("Fornecedor", $where)->result_array();
	}

	public function salvar ($fornecedor){
		if ($fornecedor['idFornecedor']>0){
			$this->db->where("idFornecedor",$fornecedor['idFornecedor']);
			$this->db->update("Fornecedor",$fornecedor);
			// return 0;

		}else{
			$this->db->insert("Fornecedor",$fornecedor);
			// return $this->db->insert_id();
		}

	}
	public function excluir($id, $where=array()){
		$this->db->where('idFornecedor', $id);
		$this->db->delete('Fornecedor');
	}
}