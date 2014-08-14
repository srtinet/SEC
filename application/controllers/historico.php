<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Historico extends CI_Controller{

	public function listar(){
		$this->load->model("historico_model");
		$historico=$this->historico_model->listar();
		$dados = array('historicos'=>$historico);
		$this->load->template("historico/lista",$dados);

	}
}