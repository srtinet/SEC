<?php 
class Documento_model extends CI_Model {
	public function listarTipo($where=array()){
		return $this->db->get_where("TipoDocumento", $where)->result_array();
	}

	public function excluirTipo($id){
		$this->db->where('idTipoDocumento', $id);
		$this->db->delete("TipoDocumento");
	}

	public function salvarTipo($setor){
		if($setor['idTipoDocumento'] > 0){
			$this->db->where('idTipoDocumento', $setor['idTipoDocumento']);
			$this->db->update('idTipoDocumento', $setor);
		}else{
			$this->db->insert('TipoDocumento', $setor);
		}
		
	}

}