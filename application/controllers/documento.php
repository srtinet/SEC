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
			"situacao"=>0,
			"dataRegistro"=>date('Y-m-d'),
				"estadoAnterior"=>0
			);

		$acc=$this->documento_model->salvarAceiteDoc($aceite);
		$aceite=array(
			"Usuario_idUsuarioDest"=> $this->input->post("Usuario_idUsuario"),
			"Usuario_idUsuarioEnv"=> $usuario['idUsuario'],
			"Documento_idDocumento"=>$doc,
			"situacao"=>1,
		
			);

		$acc=$this->documento_model->salvarAceiteDoc($aceite);



			$this->session->set_flashdata('success',"Documento enviado com sucesso");
	redirect('documento/novo');


	}

	public function ver(){
		$this->output->enable_profiler(TRUE);
$this->load->model("documento_model");
$usuario=$this->session->userdata('usuario_logado');
$enviadas=$this->documento_model->listarDoc(array("situacao"=>1,"Usuario_idUsuarioEnv"=>$usuario['idUsuario']));
$rejeitadas=$this->documento_model->listarDoc(array("situacao"=>2,"Usuario_idUsuarioEnv"=>$usuario['idUsuario']));

$recebidas=$this->documento_model->listarDoc(array("situacao"=>1,"Usuario_idUsuarioDest"=>$usuario['idUsuario']));
$histEnviadas=$this->documento_model->listarDoc(array("situacao"=>3,"Usuario_idUsuarioEnv"=>$usuario['idUsuario']));
$histRecebidas=$this->documento_model->listarDoc(array("situacao"=>3,"Usuario_idUsuarioDest"=>$usuario['idUsuario']));

$dados=array("enviadas"=>$enviadas,"recebidas"=>$recebidas,"rejeitadas"=>$rejeitadas,"hisEnviadas"=>$histEnviadas,"hisRecebidas"=>$histRecebidas);
		$this->load->template("documento/ver",$dados);
	}
	public function aceite($id){
		$this->load->model("documento_model");
		$aceite=array(
"idAceiteDocumento"=>$id,
"dataRegistro"=>date('Y-m-d'),
"situacao"=>3

			);
		$enviadas=$doc=$this->documento_model->aceitar($aceite);
		redirect("documento/ver");





	}

		public function rejeite($id){
		$this->load->model("documento_model");
		$aceite=array(
"idAceiteDocumento"=>$id,
"dataRegistro"=>date('Y-m-d'),
"situacao"=>2

			);
		$enviadas=$doc=$this->documento_model->aceitar($aceite);
		redirect("documento/ver");





	}
	public function reenviar($id){
		$this->output->enable_profiler(TRUE);
		$this->load->model("documento_model");
		
		$aceite=array(
			"idAceiteDocumento"=>$id,
			"estadoAnterior"=>'0');

		$this->documento_model->aceitar($aceite);

		$anterior=$this->documento_model->listarAceite(array("idAceiteDocumento"=>$id));

		$aceite=array(
			"Usuario_idUsuarioDest"=> $anterior['Usuario_idUsuarioDest'],
			"Usuario_idUsuarioEnv"=> $anterior['Usuario_idUsuarioEnv'],
			"Documento_idDocumento"=>$anterior['Documento_idDocumento'],
			"situacao"=>1,
			"dataRegistro"=>date('Y-m-d')


			);
		$doc=$this->documento_model->salvarAceiteDoc($aceite);
		redirect("documento/ver");





	}

	public function cliente($id){
		$this->load->model('documento_model');
		$enviadas=$this->documento_model->listarDoc(array("Documento_idDocumento"=>$id));
	

		$this->documento_model->salvarDoc(array("idDocumento"=>$id,"cliente"=>1));
			$dados=array('documentos'=>$enviadas);


			$this->load->relatorio("documento/cliente",$dados);


	}

	public function baixa(){
		$this->load->model('documento_model');


		$aceite=array(
			"idAceiteDocumento"=>$this->input->post("idAceiteDocumento"),
			"estadoAnterior"=>'0');

		$id=$this->documento_model->aceitar($aceite);

		$anterior=$this->documento_model->listarAceite(array("idAceiteDocumento"=>$this->input->post("idAceiteDocumento")));

		$aceite=array(
			"Usuario_idUsuarioDest"=> $anterior['Usuario_idUsuarioDest'],
			"Usuario_idUsuarioEnv"=> $anterior['Usuario_idUsuarioEnv'],
			"Documento_idDocumento"=>$anterior['Documento_idDocumento'],
			"situacao"=>4,
			"dataRegistro"=>date('Y-m-d'),
						"observacao"=>$this->input->post("observacao")


			);
		$doc=$this->documento_model->salvarAceiteDoc($aceite);
		redirect("documento/ver");


	}





}