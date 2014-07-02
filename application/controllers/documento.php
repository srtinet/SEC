<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documento extends CI_Controller{

public function listarTipo(){


		$this->load->model("documento_model");
		$Tipo=$this->documento_model->listarTipo();
		$dados=array("documentos"=>$Tipo);
		$this->load->template("documento/listarTipo",$dados);

}

public function form($id=0){
		$this->load->model("documento_model");
		$documento=$this->documento_model->listarTipo(array("idTipoDocumento"=>$id));
		$dados=array("TipoDocumento"=>$documento);
		$this->load->template("documento/form",$dados);
	}


			public function cadastrar(){
		$this->load->model("documento_model");
		$documento=array(
			"idTipoDocumento" => $this->input->post("idTipoDocumento"),
			"descricao" => $this->input->post("descricao"));
		$this->documento_model->salvarTipo($documento);
		$this->session->set_flashdata('success',"Documento salvo com sucesso");
		redirect('documento/listarTipo');
	}


		public function excluir($id){
		$this->load->model("documento_model");
		$this->documento_model->excluirTipo($id);
		$this->session->set_flashdata('success', 'Excluido com Sucesso');
				redirect('documento/listarTipo');
	}

	public function novo(){
		$this->load->model("documento_model");
		$this->load->model("empresa_model");
		$this->load->model("usuarios_model");
		$empresa=$this->empresa_model->listar();
		$usuario=$this->usuarios_model->listar();
		$tipo=$this->documento_model->listarTipo();
		$dados=array("tipodocumentos"=>$tipo,"empresas"=>$empresa,"usuarios"=>$usuario);
		$this->load->template("documento/novo",$dados);




	}




}