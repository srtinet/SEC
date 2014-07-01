<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login  extends CI_Controller{


	public function autenticar(){
		$this->output->enable_profiler(TRUE);

		$this->load->model("usuarios_model");
		$usuario=$this->input->post("usuario");
		$senha = $this->input->post("senha");
		$usuario = $this->usuarios_model->buscaPorUsuarioESenha($usuario,$senha);
		if ($usuario) {
			$this->session->set_userdata(array("usuario_logado"=> $usuario ));
			$this->session->set_flashdata('success',"logado com Sucesso");
			
			redirect('home');
		}else{

			$this->session->set_flashdata('danger',"Usuario ou senha inválido");
			redirect('/');
		}

	}
	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata('success',"Deslogado com Sucesso");
		redirect('/');


	}

}
