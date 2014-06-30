<?php
class Socio_model extends CI_Model{

	public function listar($where=array()){
		return $this->db->get_where("Socio", $where)->result_array();
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