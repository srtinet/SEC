<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Dependente  extends CI_Controller{
		public function listar($idSocio){
			$this->load->model("dependente_model");
			$dependente = $this->dependente_model->listarDependente(array("idSocio" => $idSocio));
			$dados = array("dependentes" => $dependente, "idSocio" => $idSocio);
			// $idDependente = 1;
			// $this->dependente_model->idade($idDependente);
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
				"ativo" => 1
				);
			$this->dependente_model->salvar($dependente);
			$this->session->set_flashdata('success',"Dependente Salvo com Sucesso");
			redirect('dependente/listar/'.$this->input->post("idSocio"));
		}

		// public function idade($idDependente){
		// 	$this->load->model("dependente_model");
		// 	$dependenteN = $this->dependente_model->pegaIdade(array("idDependente" => $idDependente));
		// 	$idade = dataMysqlParaPtBr($dependenteN['dataNascimento']);
		// 	if($idade > 18){
		// 		$this->dependente_model->atualizaAtivo(array("idDependente" => $idDependente, "ativo" => 2));
		// 	};
		// }
}