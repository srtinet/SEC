<?php 
class Responsabilidade_model extends CI_Model {


public function controle($where=array()){
	$this->db->order_by("data", "desc"); 
	$this->db->limit(1);
	 return $this->db->get_where("Controle",$where)->row_array();


} 

public function periodoAtividade($data1,$data2){

$this->db->query("update AtividadeEmpresa set dataControle = concat(Year(now()),'-',Month(dataControle),'-',day(dataControle))"); 


			$this->db->where('dataControle BETWEEN ' . $data1 . ' AND ' . $data2);
	 return $this->db->get("AtividadeEmpresa")->result_array();


} 


}

