<?php 
class Empresa_model extends CI_Model {
	public function listar($where=array()){
		$this->db->order_by("razaoSocial", "asc");
		return $this->db->get_where("Empresa", $where)->result_array();
	}
	public function listarEmpresa($idEmpresa = null){
		if ($idEmpresa != null) {
            $this->db->where("idEmpresa", $idEmpresa);
        }
        
        $this->db->order_by("razaoSocial");
        return $this->db->get("Empresa");
	}
	public function listarAtividade($where=array()){
		// $this->db->order_by("razaoSocial", "asc");
		return $this->db->get_where("AtividadeEmpresa", $where)->result_array();


	} 

	public function listarSetor($where=array(),$tipo=0){
		if ($tipo==0){
			return $this->db->get_where("SetorUsuario", $where)->result_array();
		}else{
			return $this->db->get_where("SetorUsuario", $where)->row_array();
		}
	} 

	public function listarSetorJoin($where=array()){
		$this->db->select("SetorUsuario.*,Empresa.razaoSocial,Setor.descricao as setorDescricao , Usuario.nome");
		$this->db->from(" SetorUsuario");
		$this->db->join("Empresa", "Empresa.idEmpresa =  SetorUsuario.Empresa_idEmpresa");
		$this->db->join("Setor", "Setor.idSetor =  SetorUsuario.Setor_idSetor");
		$this->db->join("Usuario", "Usuario.idUsuario =  SetorUsuario.Usuario_idUsuario");
		$this->db->where($where);
		return $this->db->get()->result_array();
	}
		public function listarSetorDis($where=array()){

		$this->db->select("Setor.descricao,Setor.idSetor");
		$this->db->from(" SetorUsuario");
		$this->db->join("Empresa", "Empresa.idEmpresa =  SetorUsuario.Empresa_idEmpresa");
		$this->db->join("Setor", "Setor.idSetor =  SetorUsuario.Setor_idSetor");
		$this->db->join("Usuario", "Usuario.idUsuario =  SetorUsuario.Usuario_idUsuario");
		$this->db->where($where);
		$this->db->group_by("Setor.descricao"); 
		return $this->db->get()->result_array();
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


	public function salvar($empresa){
		if ($empresa['idEmpresa']>0){
			$this->db->where("idEmpresa",$empresa['idEmpresa']);
			$this->db->update("Empresa",$empresa);
			return 0;

		}else{
			$this->db->insert("Empresa",$empresa);
			return $this->db->insert_id();
		}

		

	}
	public function excluir($id, $where=array()){
		$this->db->where("idEmpresa",$id);
		$this->db->update("Empresa",$where);
	}
	public function excluirAtividade($id){
		$this->db->where("idAtividadeEmpresa",$id);
		$this->db->delete('AtividadeEmpresa'); 

	}

	public function cadAtividade($atividade){
		if ($atividade['idAtividadeEmpresa']>0){
			$this->db->where("idAtividadeEmpresa",$atividade['idAtividadeEmpresa']);
			$this->db->update("AtividadeEmpresa",$atividade);

		}else{
			$this->db->insert("AtividadeEmpresa",$atividade);

		}
	}

	public function cadResponsavel($reponsavel){
		if ($reponsavel['idSetorUsuario']>0){
			$this->db->where("idSetorUsuario",$reponsavel['idSetorUsuario']);
			$this->db->update("SetorUsuario",$reponsavel);

		}else{
			$this->db->insert("SetorUsuario",$reponsavel);
		}
	}
	public function excluirResponsavel($id){
		$this->db->where("idSetorUsuario",$id);
		$this->db->delete('SetorUsuario');
	}

}