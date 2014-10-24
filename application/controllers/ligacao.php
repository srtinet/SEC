<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ligacao extends CI_Controller{
	public function form($id=0){
		$this->load->model("empresa_model");
		$empresa = $this->empresa_model->listar();
		$dados = array("empresa" => $empresa);
		$this->load->template("ligacao/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("ligacao_model");
		$empresa = $this->input->post('Empresa_idEmpresa');
		if($empresa == 0){
			$empresa = 367;
		};
		$ligacao = array(
			"Empresa_IdEmpresa" => $empresa,
			"Usuario_idUsuario" => $this->input->post('Usuario_idUsuario'),
			"estado" => $this->input->post('estado'),
			"observacao" => $this->input->post('observacao')
			);
		$this->ligacao_model->salvar($ligacao);
		$this->session->set_flashdata('success', 'Solicitado com Sucesso');
		redirect("ligacao/listar");
	}

	public function listar(){
		// $this->output->enable_profiler(TRUE);
		$usuario = $this->session->userdata['usuario_logado'];
		$this->load->model("ligacao_model");
		$ligacao = $this->ligacao_model->listar(array("Usuario_idUsuario"=>$usuario['idUsuario']));
		$dados = array("lista" => $ligacao);
		$this->load->template("ligacao/lista",$dados);
	}
	public function listarTelefonista(){
		$this->output->enable_profiler(TRUE);
		$this->load->model("ligacao_model");
		$ligacao = $this->ligacao_model->listarTelefonista();
		$dados=array('lista' => $ligacao);
		$this->load->template("ligacao/listaTelefonista", $dados);
	}
	public function listarTelefonista2(){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("ligacao_model");
		$ligacao = $this->ligacao_model->listarTelefonista();
		$dados=array('lista' => $ligacao);
		$resul = array();
		foreach ($ligacao as $linha ) {
			array_push($resul, $linha);
		}
		echo json_encode($resul);
	}
	public function alteraEstado(){
		$estado = array(
			"idTelefonema" => $this->input->post('idTelefonema'),
			"estado" => $this->input->post('estado')
			);
		$this->load->model("ligacao_model");
		$novoEstado = $this->ligacao_model->alteraEstado($estado);
		if($estado['estado'] == 3 || $estado['estado'] == 0){
			redirect("ligacao/listar");
		}else{
			redirect("ligacao/listarTelefonista");
		}
	}
}