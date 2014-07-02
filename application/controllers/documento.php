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

	public function salvarDoc(){
		$this->load->model("documento_model");
		$usuario=$this->session->userdata('usuario_logado');
		$documento=array(
			"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
			"Usuario_idUsuario" =>$usuario['idUsuario'],
			"TipoDocumento_idTipoDocumento" => $this->input->post("TipoDocumento_idTipoDocumento"),
			"descricao" => $this->input->post("descricao"),
			"dataAbertura"=>date("Y-m-d"));
		$doc=$this->documento_model->salvarDoc($documento);
		$aceite=array(
			"Usuario_idUsuarioDest"=> $this->input->post("Usuario_idUsuario"),
			"Usuario_idUsuarioEnv"=> $usuario['idUsuario'],
			"Documento_idDocumento"=>$doc,
			"situacao"=>0);

		$doc=$this->documento_model->salvarAceiteDoc($aceite);
			$this->session->set_flashdata('success',"Documento enviado com sucesso");
	redirect('documento/novo');


	}

	public function ver(){
		$this->output->enable_profiler(TRUE);
$this->load->model("documento_model");
$usuario=$this->session->userdata('usuario_logado');
$enviadas=$doc=$this->documento_model->ListarDoc(array("situacao"=>0,"Usuario_idUsuarioEnv"=>$usuario['idUsuario']));
$recebidas=$doc=$this->documento_model->ListarDoc(array("situacao"=>0,"Usuario_idUsuarioDest"=>$usuario['idUsuario']));
$histEnviadas=$doc=$this->documento_model->ListarDoc(array("situacao"=>1,"Usuario_idUsuarioEnv"=>$usuario['idUsuario']));
$histRecebidas=$doc=$this->documento_model->ListarDoc(array("situacao"=>1,"Usuario_idUsuarioDest"=>$usuario['idUsuario']));

$dados=array("enviadas"=>$enviadas,"recebidas"=>$recebidas);
		$this->load->template("documento/ver",$dados);
	}




}