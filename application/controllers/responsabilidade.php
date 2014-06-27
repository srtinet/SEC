<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Responsabilidade extends CI_Controller{


	public function index(){
		$this->load->model("responsabilidade_model");
		$controle=$this->responsabilidade_model->controle();
		$ultimadata=$controle['data'];
		$hoje=date("Y-m-d");
	$controle=$this->responsabilidade_model->periodoAtividade($ultimadata,$hoje);
$dados=array("periodo"=>$controle);
		$this->load->template("responsabilidade/responsabilidade",$dados);

	}
	public function listar() {
		$this->load->model("responsabilidade_model");
		$responsabilidadeTp=$this->responsabilidade_model->listar();





	}


}