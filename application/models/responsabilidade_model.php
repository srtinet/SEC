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


}

}

