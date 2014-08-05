<?php
class Responsabilidade_model extends CI_Model {
	public function controle($where=array()){
		$this->db->order_by("data", "desc");
		$this->db->limit(1);
		return $this->db->get_where("Controle",$where)->row_array();
	}
	public function salvarControle($data){
		$this->db->insert('Controle',$data);
	}
	public function periodoAtividade($data1,$data2){
		$this->db->query("update AtividadeEmpresa set dataControle = concat(Year(now()),'-',Month(dataControle),'-',day(dataControle))");
		$this->db->select("AtividadeEmpresa.*, Empresa.razaoSocial,Setor.descricao as setorDescricao , Atividade.descricao as atividadeDescricao");
		$this->db->from("AtividadeEmpresa");
		$this->db->join("Empresa", "Empresa.idEmpresa = AtividadeEmpresa.Empresa_idEmpresa");
		$this->db->join("Setor", "Setor.idSetor = AtividadeEmpresa.Setor_idSetor");
		$this->db->join("Atividade", "Atividade.idAtividade = AtividadeEmpresa.Atividade_idAtividade");
		$this->db->where("dataControle BETWEEN '" . $data1 . "' AND '" . $data2."'");
		return $this->db->get()->result_array();
	}
	public function salvar($responsabilidade){
		$this->db->insert('Responsabilidade',$responsabilidade);
		return $this->db->insert_id();
	}
	public function salvarEstado($estado){
		if ($estado['idEstadoResponsabilidade']>0){
			$this->db->where("idEstadoResponsabilidade",$estado['idEstadoResponsabilidade']);
			$this->db->update('EstadoResponsabilidade',$estado);
		}else{
			$this->db->insert('EstadoResponsabilidade',$estado);
		}
	}
	public function listarEstado($where=array()){
		return $this->db->get_where("EstadoResponsabilidade",$where)->row_array();
	}
	public function listarResponsabilidade($where=array(),$data1='',$data2='',$agrupar=''){
		$this->db->select(" Responsabilidade.*,EstadoResponsabilidade.idEstadoResponsabilidade,EstadoResponsabilidade.estado as estadoResponsabilidade,EstadoResponsabilidade.estadoProximo,Empresa.razaoSocial,Setor.descricao as setorDescricao , Usuario.nome as usuarioNome,Atividade.nivel,Atividade.anexo,Atividade.descricao as atividadedescricao,Empresa.idEmpresa,Atividade.idAtividade,Usuario.idUsuario");
		$this->db->from(" Responsabilidade");
		$this->db->join("AtividadeEmpresa", "AtividadeEmpresa.idAtividadeEmpresa =  Responsabilidade.AtividadeEmpresa_idAtividadeEmpresa");
		$this->db->join("Atividade", "Atividade.idAtividade =  AtividadeEmpresa.Atividade_idAtividade");
		$this->db->join("EstadoResponsabilidade", "EstadoResponsabilidade.Responsabilidade_idResponsabilidade =  Responsabilidade.idResponsabilidade");
		$this->db->join("Empresa", "Empresa.idEmpresa =  AtividadeEmpresa.Empresa_idEmpresa");
		$this->db->join("Setor", "Setor.idSetor =  AtividadeEmpresa.Setor_idSetor");
		$this->db->join("Usuario", "Usuario.idUsuario =  Responsabilidade.Usuario_idUsuario");
		$this->db->where('estadoProximo is null');
		$this->db->where('EstadoResponsabilidade.estado != 4');
		$this->db->where($where);

		if($data1!='' and $data2!='')
			$this->db->where("dataVencimento BETWEEN '" . $data1 . "' AND '" . $data2."'");
		$this->db->order_by("dataVencimento", "desc"); 
		$this->db->group_by($agrupar); 
		return $this->db->get()->result_array();
	}
	public function listarResponsabilidadeGestor($where=array(),$agrupar=''){
		$this->db->select(" Responsabilidade.*,GestorSetor.Usuario_idUsuario as gestorID,EstadoResponsabilidade.idEstadoResponsabilidade,EstadoResponsabilidade.estado as estadoResponsabilidade,EstadoResponsabilidade.estadoProximo,Empresa.razaoSocial,Setor.descricao as setorDescricao , Usuario.nome as usuarioNome,Atividade.nivel,Atividade.anexo,Atividade.descricao as atividadedescricao,Empresa.idEmpresa,Atividade.idAtividade,Usuario.idUsuario");
		$this->db->from(" Responsabilidade");
		$this->db->join("AtividadeEmpresa", "AtividadeEmpresa.idAtividadeEmpresa =  Responsabilidade.AtividadeEmpresa_idAtividadeEmpresa");
		$this->db->join("Atividade", "Atividade.idAtividade =  AtividadeEmpresa.Atividade_idAtividade");
		$this->db->join("EstadoResponsabilidade", "EstadoResponsabilidade.Responsabilidade_idResponsabilidade =  Responsabilidade.idResponsabilidade");
		$this->db->join("Empresa", "Empresa.idEmpresa =  AtividadeEmpresa.Empresa_idEmpresa");
		$this->db->join("GestorSetor", "AtividadeEmpresa.Setor_idSetor =  GestorSetor.Setor_idSetor");
		$this->db->join("Setor", "Setor.idSetor =  AtividadeEmpresa.Setor_idSetor");
		$this->db->join("Usuario", "Usuario.idUsuario =  Responsabilidade.Usuario_idUsuario");
		$this->db->where('estadoProximo is null');
		$this->db->where($where);
		$this->db->group_by($agrupar);
		$this->db->order_by("dataVencimento", "desc");
		return $this->db->get()->result_array();
	}
	public function contResponsabilidade($where=array()){
		
		$this->db->where($where);
		// $this->db->where("dataVencimento",date("Y-m-d"));
		return $this->db->count_all_results("Responsabilidade");
	}
	public function contValidacoes($where=array()){
		$this->db->where($where);
		return $this->db->count_all_results("Responsabilidade");
	}
}