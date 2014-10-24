<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ob_start ();
class Observacao extends CI_Controller{
	public function cadastrar(){
		$this->load->model("observacao_model");
		$observacao = array(
			'observacao' => $this->input->post('observacao'),
			'Responsabilidade_idResponsabilidade' => $this->input->post('Responsabilidade_idResponsabilidade'),
			'Usuario_idUsuario' => $this->input->post('Usuario_idUsuario')
		);
		$this->observacao_model->salvar($observacao);
		$this->session->set_flashdata('success', "Observação cadastrada com  Sucesso");
        redirect("responsabilidade");
	}

	public function listarUsuarioObservacao(){
		$this->load->model("observacao_model");
		$id = $this->input->post('type');
		$lista = $this->observacao_model->listarUsuarioObservacao(array("Responsabilidade_idResponsabilidade" => $id));
		echo json_encode($lista);
	}}
