<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Observacao extends CI_Controller{
	public function cadastrar(){
		$this->load->model("observacao_model");
		$observacao = array(
			'observacao' => $this->input->post('observacao'),
			'Responsabilidade_idResponsabilidade' => $this->input->post('Responsabilidade_idResponsabilidade')
		);
		$this->observacao_model->salvar($observacao);
		$this->session->set_flashdata('success', "Observação cadastrada com  Sucesso");
        redirect("responsabilidade");
	}
}