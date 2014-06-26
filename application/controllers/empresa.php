<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa  extends CI_Controller{

	public function listar(){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar();
		$dados=array('empresas'=>$empresa);
		$this->load->template("empresa/lista",$dados);

	}


	public function form($id=0){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id));	
		
		$dados=array("empresas"=>$empresa);
		$this->load->template("empresa/form",$dados);
	}
	public function excluir($id){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->excluir($id);
		redirect('empresa/listar');



	}


	public function cadastrar(){
		$this->load->model("empresa_model");
		$empresa=array(
			"idEmpresa" => $this->input->post("idEmpresa"),
			"razaoSocial" => $this->input->post("razaoSocial")
			);

		$this->empresa_model->salvar($empresa);

		$this->session->set_flashdata('success',"Empresa Salvo com Sucesso");
		redirect('empresa/listar');

	}

	public function atividade($id){
		$this->load->model("empresa_model");
		$this->load->model("atividade_model");
		$this->load->model("setor_model");
		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id));	
		$empresaAtividade=$this->empresa_model->listarAtividade(array("Empresa_idEmpresa"=>$id));
		$Atividade=$this->atividade_model->listar();
		$setor=$this->setor_model->listar();
		$dados=array("empresas"=>$empresa,"empresaAtividades"=>$empresaAtividade,"atividades"=>$Atividade,"setores"=>$setor);
		$this->load->template("empresa/atividade",$dados);		


	}
	public function cadAtividade(){
		$this->load->model("empresa_model");
		
	}

}
