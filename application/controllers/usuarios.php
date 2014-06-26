<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios  extends CI_Controller{
	
	public function listar(){
		$this->load->model("usuarios_model");
		$usuario=$this->usuarios_model->listar();
		$dados=array("usuarios"=>$usuario);
		$this->load->template("usuario/lista",$dados);

	}
	public function form($id=0){
		$this->load->model("usuarios_model");
		$usuario=$this->usuarios_model->listar(array("idUsuario"=>$id));	
		
		$dados=array("usuarios"=>$usuario);
		$this->load->template("usuario/form",$dados);
	}
	public function excluir($id){
		$this->load->model("usuarios_model");
		$usuario=$this->usuarios_model->excluir($id);
		redirect('usuarios/listar');



	}


	public function cadastrar(){
		$this->load->model("usuarios_model");
		$usuarios=array(
			"idUsuario" => $this->input->post("idUsuario"),
			"nome" => $this->input->post("nome"),
			"login" => $this->input->post("login"),
			"senha" => $this->input->post("senha"),
			"email" => $this->input->post("email"),
			"tipo" => $this->input->post("tipo")

			);

		$this->usuarios_model->salvar($usuarios);

		$this->session->set_flashdata('success',"Produto Salvo com Sucesso");
		redirect('usuarios/listar');

	}

}