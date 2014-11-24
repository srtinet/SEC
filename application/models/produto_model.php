<?php
class Produto_model extends CI_Model {
	public function listar($where=array()){
		return $this->db->get_where("Produto", $where)->result_array();
	}

	public function salvar ($produto){
		if ($produto['idProduto']>0){
			$this->db->where("idProduto",$produto['idProduto']);
			$this->db->update("Produto",$produto);
			return 0;

		}else{
			$this->db->insert("Produto",$produto);
			// return $this->db->insert_id();
		}

	}
	public function excluir($id, $where=array()){
		$this->db->where('idProduto', $id);
		$this->db->delete('Produto');
	}

}