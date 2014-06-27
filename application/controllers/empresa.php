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
			"razaoSocial" => $this->input->post("razaoSocial"));
		$this->empresa_model->salvar($empresa);
		$this->session->set_flashdata('success',"Empresa Salvo com Sucesso");
		redirect('empresa/listar');

	}

	public function atividade($id_empresa,$id_atividade=0){
		$this->load->model("empresa_model");
		$this->load->model("atividade_model");
		$this->load->model("setor_model");
		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id_empresa));	
		$empresaAtividadeSl=$this->empresa_model->listarAtividade(array("idAtividadeEmpresa"=>$id_atividade));
		$empresaAtividade=$this->empresa_model->listarAtividadeJoin(array("Empresa_idEmpresa"=>$id_empresa));
		$Atividade=$this->atividade_model->listar();
		$setor=$this->setor_model->listar();
		$dados=array("empresas"=>$empresa,"empresaAtividades"=>$empresaAtividade,"atividades"=>$Atividade,"setores"=>$setor,"AtividadeSelecionada"=>$empresaAtividadeSl);
		$this->load->template("empresa/atividade",$dados);		


	}

	public function cadAtividade(){
		$this->load->model("empresa_model");
		$data=dataPtBrParaMysql($this->input->post("dataControle"));
		$atividade=array(
			"idAtividadeEmpresa" => $this->input->post("idAtividadeEmpresa"),
			"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
			"Setor_idSetor" => $this->input->post("Setor_idSetor"),
			"Atividade_idAtividade" => $this->input->post("Atividade_idAtividade"),
			"dataControle" => $data);
		$this->empresa_model->cadAtividade($atividade);
		$this->session->set_flashdata('success',"Atividade vinculada Sucesso");
		redirect('empresa/atividade/'.$this->input->post("Empresa_idEmpresa"));

	}
	public function excluirAtividade($id_atividade,$id_empresa){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->excluirAtividade($id_atividade);
		$this->session->set_flashdata('success',"Atividade Excluida com Sucesso");
		redirect('empresa/atividade/'.$id_empresa);



	}

	public function  responsaveis($id_empresa,$id_atividade=0){
		$this->load->model("empresa_model");
		$this->load->model("usuarios_model");
		$this->load->model("setor_model");
		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id_empresa));	
		$setor=$this->setor_model->listar();
		$usuario=$this->usuarios_model->listar();
		$setorUsuarioSl=$this->empresa_model->listarSetorJoin(array("idSetorUsuario"=>$id_atividade));
		$setorUsuario=$this->empresa_model->listarSetorJoin(array("idEmpresa"=>$id_empresa));
		$dados=array("empresas"=>$empresa,"setorUsuarioEmpresa"=>$setorUsuario,"usuarios"=>$usuario,"setores"=>$setor,"responsaveis"=>$setorUsuarioSl);
		$this->load->template("empresa/responsaveis",$dados);	


	}

		public function cadResponsavel(){
		$this->load->model("empresa_model");
		
		$responsavel=array(
			"idSetorUsuario" => $this->input->post("idSetorUsuario"),
			"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
			"Setor_idSetor" => $this->input->post("Setor_idSetor"),
			"Usuario_idUsuario" => $this->input->post("Usuario_idUsuario"));
		$this->empresa_model->cadResponsavel($responsavel);
		$this->session->set_flashdata('success',"Atividade vinculada Sucesso");
		redirect('empresa/responsaveis/'.$this->input->post("Empresa_idEmpresa"));

	}
	public function excluirResponsaveis($id_responsavel,$id_empresa){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->excluirResponsavel($id_responsavel);
		$this->session->set_flashdata('success',"Atividade Excluida com Sucesso");
		redirect('empresa/responsaveis/'.$id_empresa);



	}


}
