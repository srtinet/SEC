<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documento extends CI_Controller{

public function listarTipo(){


		$this->load->model("documento_model");
		$Tipo=$this->documento_model->listarTipo();
		$dados=array("documentos"=>$Tipo);
		$this->load->template("documento/listaTipo",$dados);

}

public function form($id=0){
		$this->load->model("documento_model");
		$atividade=$this->documento_model->listar(array("idTipoDocumento"=>$id));
		$dados=array("TipoDocumento"=>$atividade);
		$this->load->template("documento/form",$dados);
	}

}