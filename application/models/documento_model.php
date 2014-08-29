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

	public function salvarDoc($documento){
		if($documento['idDocumento'] > 0){
			$this->db->where('idDocumento', $documento['idDocumento']);
			$this->db->update('Documento', $documento);
		}
		else{
			$this->db->insert('Documento', $documento);
		}
		return $this->db->insert_id();
	}
	public function salvarAceiteDoc($salvarAceiteDoc){
		$this->db->insert('AceiteDocumento', $salvarAceiteDoc);
		return $this->db->insert_id();
	}

	public function listarDoc($where=array()){
		$this->db->select("AceiteDocumento.*,Documento.descricao as descricaoDocumento , Empresa.razaoSocial,TipoDocumento.descricao as descricaoTipoDocumento, desUse.nome as destinatario,envUse.nome as remetente");
		$this->db->from("Documento");
		$this->db->join("AceiteDocumento", "AceiteDocumento.Documento_idDocumento = Documento.idDocumento");
		$this->db->join("Empresa", "Empresa.idEmpresa = Documento.Empresa_idEmpresa");
		$this->db->join("Usuario as desUse", "desUse.idUsuario = AceiteDocumento.Usuario_idUsuarioDest");
		$this->db->join("Usuario as envUse", "envUse.idUsuario = AceiteDocumento.Usuario_idUsuarioEnv");
		$this->db->join("TipoDocumento", "TipoDocumento.idTipoDocumento = Documento.TipoDocumento_idTipoDocumento");
		$this->db->where('estadoAnterior is null');
		$this->db->where($where);
		$this->db->order_by("AceiteDocumento.dataRegistro", "desc"); 
		
		return $this->db->get()->result_array();
		

	}
	public function aceitar($aceite){


		$this->db->where('idAceiteDocumento', $aceite['idAceiteDocumento']);
		$this->db->update('AceiteDocumento', $aceite);






	}



	public function listarAceite($where){
		return $this->db->get_where("AceiteDocumento", $where)->row_array();


	}

	public function contDocumento($where=array()){
			// $this->db->select("Usuario.idUsuario, AceiteDocumento.Usuario_idUsuarioDest, AceiteDocumento.situacao");
			// $this->db->from("AceiteDocumento");
			// $this->db->join("Usuario", "Usuario.idUsuario = AceiteDocumento.Usuario_idUsuarioDest");
			// $this->db->where("estadoAnterior is null");
		$this->db->where($where);
		return $this->db->count_all_results("AceiteDocumento");
	}


	
	

}