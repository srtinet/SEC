<?php 
class Documento_model extends CI_Model {
	public function listarTipo($where=array()){
		return $this->db->get_where("TipoDocumento", $where)->result_array();
	}

	public function excluirTipo($id){
		$this->db->where('idTipoDocumento', $id);
		$this->db->delete("TipoDocumento");
	}

	public function salvarTipo($documento){
		if($documento['idTipoDocumento'] > 0){
			$this->db->where('idTipoDocumento', $documento['idTipoDocumento']);
			$this->db->update('TipoDocumento', $documento);
		}else{
			$this->db->insert('TipoDocumento', $documento);
		}
		
	}

}