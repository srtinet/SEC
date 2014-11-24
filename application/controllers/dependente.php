<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dependente  extends CI_Controller{
	public function listar($idSocio){
		// $this->output->enable_profiler(TRUE);
		$this->load->model("dependente_model");
		$dependente = $this->dependente_model->listarDependente(array("idSocio" => $idSocio));
		$dados = array("dependentes" => $dependente, "idSocio" => $idSocio);
			// $this->dependente_model->atualizaAtivo();
		$this->load->template("dependente/lista", $dados);
	}

	public function form($idSocio, $id=0){
		$this->load->model("dependente_model");
		$dependente = $this->dependente_model->listar(array("idDependente" => $id));
		$dados = array("dependentes" => $dependente, "idSocio" => $idSocio);
		$this->load->template("dependente/form", $dados);
	}

	public function cadastrar($idSocio=0){
		$this->load->model("dependente_model");
		$dependente = array(
			"idDependente" => $this->input->post("idDependente"),
			"Socio_idSocio" => $this->input->post("idSocio"),
			"nome" => $this->input->post("nome"),
			"dataNascimento" => dataPtBrParaMysql($this->input->post("dataNascimento")),
			"idadeAnos" => calc_idade($this->input->post("dataNascimento")),
			"ativo" => 1
			);
		$this->dependente_model->salvar($dependente);
		$this->session->set_flashdata('success',"Dependente Salvo com Sucesso");
		redirect('dependente/listar/'.$this->input->post("idSocio"));
	}

	public function excluir($idSocio, $id){
		$this->load->model("dependente_model");
		$this->dependente_model->excluir($id);
		redirect('dependente/listar/$idSocio');
	}

}