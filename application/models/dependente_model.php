<?php
class Dependente_model extends CI_Model {
	public function listarDependente($where=array()){
		$this->db->select("Dependente.nome, Dependente.idDependente, Dependente.dataNascimento, Dependente.idadeAnos, Dependente.Socio_idSocio, Socio.idSocio");
		$this->db->from("Dependente");
		$this->db->join("Socio", "Dependente.Socio_idSocio = Socio.idSocio");
		$this->db->where($where);
		$this->db->where("idadeAnos <", 18);
		// $this->db->order_by("nome", "asc");
		return $this->db->get()->result_array();
	}

	public function listar($where=array()){
		return $this->db->get_where("Dependente", $where)->result_array();
	}

	public function salvar($dependente){
		if($dependente['idDependente']>0){
			$this->db->where("idDependente", $dependente['idDependente']);
			$this->db->update("Dependente", $dependente);
		}else{
			$this->db->insert("Dependente", $dependente);
		}
	}

	public function excluir($id){
		$this->db->where("idEmpresa",$id);
		$this->db->delete('Empresa');
	}


	// public function atualizaAtivo(){
	// 	$data = $this->db->select("dataNascimento");
	// 	$this->db->from("Dependente");
	// 	list($dia, $mes, $ano) = explode('/', $data);// Separa em dia, mês e ano
 //    	$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));// Descobre que dia é hoje e retorna a unix timestamp
 //    	$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);// Descobre a unix timestamp da data de nascimento do fulano
 //    	$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);// Depois apenas fazemos o cálculo já citado :)
	// 	$anos = $idade;
	// 	if($anos > 18){
	// 		$this->db->where("ativo", 1);
	// 		$this->db->update("Dependente", 2);
	// 	}
	// }
}