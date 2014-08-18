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
		$this->load->model("empresa_model");
		$usuario=$this->usuarios_model->listar(array("idUsuario"=>$id));
		$empresa = $this->empresa_model->listar(array("situacao"=>1));
		$dados=array("empresa" => $empresa, "usuarios"=>$usuario);
		$this->load->template("usuario/form",$dados);
	}
	public function excluir($id){
		$this->load->model("usuarios_model");
		$usuario=$this->usuarios_model->excluir($id);
		redirect('usuarios/listar');
	}

	public function cadastrar($id=0){
		// $this->form_validation->set_rules("nome", "nome", "required");
		// $this->form_validation->set_rules("login", "login", "required");
		// $this->form_validation->set_rules("senha", "senha", "required");
		// $this->form_validation->set_rules("consenha", "confirmar senha", "required");
		// $this->form_validation->set_rules("email", "email", "required");
		// $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		// $sucesso = $this->form_validation->run();
		// if($sucesso){
			$this->load->model("usuarios_model");
			$usuarios=array(
				"idUsuario" => $this->input->post("idUsuario"),
				"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
				"nome" => $this->input->post("nome"),
				"login" => $this->input->post("login"),
				"senha" => $this->input->post("senha"),
				"email" => $this->input->post("email"),
				"tipo" => $this->input->post("tipo")
				);
			$this->usuarios_model->salvar($usuarios);
			$this->session->set_flashdata('success',"Usuario Salvo com Sucesso");
			redirect('usuarios/listar');

		// }else {
		// 	$this->load->model("usuarios_model");
		// 	$usuario=$this->usuarios_model->listar(array("idUsuario"=>$id));
		// 	$dados=array("usuarios"=>$usuario);
		// 	$this->load->template("usuario/form",$dados);
		// }
	}

		public function  gestor($id_Usuario,$id_Gestor=0){
			$this->load->model("empresa_model");
			$this->load->model("usuarios_model");
			$this->load->model("setor_model");
			$usuario=$this->usuarios_model->listar(array("idUsuario"=>$id_Usuario),1);
			$setor=$this->setor_model->listar();

			$gestorSetorSl=$this->usuarios_model->listarGestorJoin(array("idGestorSetor"=>$id_Gestor));
			$gestorSetor=$this->usuarios_model->listarGestorJoin(array("Usuario_idUsuario"=>$id_Usuario));
			$dados=array("gestorSetorUsuario"=>$gestorSetor,"usuarios"=>$usuario,"setores"=>$setor,"gestorSl"=>$gestorSetorSl);
			$this->load->template("usuario/gestor",$dados);	


		}

		public function cadGestor(){
			$this->load->model("usuarios_model");

			$responsavel=array(
				"idGestorSetor" => $this->input->post("idGestorSetor"),

				"Setor_idSetor" => $this->input->post("Setor_idSetor"),
				"Usuario_idUsuario" => $this->input->post("Usuario_idUsuario"));
			$this->usuarios_model->cadGestor($responsavel);
			$this->session->set_flashdata('success',"Atividade vinculada Sucesso");
			redirect('usuarios/gestor/'.$this->input->post("Usuario_idUsuario"));

		}

		public function excluirGestor($id_Gestor,$id_Usuario){
			$this->load->model("usuarios_model");
			$empresa=$this->usuarios_model->excluirgestor($id_Gestor);
			$this->session->set_flashdata('success',"Gestor Excluido com Sucesso");
			redirect('usuarios/gestor/'.$id_Usuario);



		}


	}