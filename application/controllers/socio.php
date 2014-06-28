<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socio extends CI_Controller{


	public function listar(){
		$this->load->model("socio_model");
		$socio = $this->socio_model->listar();
		$dados = array('socios' => $socio);
		$this->load->template("socio/lista", $dados);
		}
	public function form($id=0){
		$this->load->model("socio_model");
		$socio = $this->socio_model->listar(array("idSocio"=>$id));
		$dados = array('socios' => $socio);
		$this->load->template("socio/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("socio_model");
		$socio = array(
			'idSocio' => $this->input->post('idSocio'),
			'nome' => $this->input->post('nome'),
			'idSocio' => $this->input->post('idSocio'),
			'inicioContribuicao' => $this->input->post('inicioContribuicao'),
			'proLabore' => $this->input->post('proLabore'),
			'valorProLabore' => $this->input->post('valorProLabore'),
			'aposentado' => $this->input->post('aposentado'),
			'dataAposentadoriaIdade' => $this->input->post('dataAposentadoriaIdade'),
			'dataAposentadoriaContribuicao' => $this->input->post('dataAposentadoriaContribuicao'),
			'dependente' => $this->input->post('dependente'),
			'nomeDependente' => $this->input->post('nomeDependente'),
			'dataNascimentoDependente' => $this->input->post('dataNascimentoDependente'),
			'empregada' => $this->input->post('empregada'),
			'rotinaTrabalhista' => $this->input->post('rotinaTrabalhista'),
			'nomeEmpregada' => $this->input->post('nomeEmpregada'),
			'cpf' => $this->input->post('cpf'),
			'nit' => $this->input->post('nit'),
			'obrigadoImpostoRenda' => $this->input->post('obrigadoImpostoRenda'),
			'declaracaoEscritorio' => $this->input->post('declaracaoEscritorio'),
			'titularOutraEmpresa' => $this->input->post('titularOutraEmpresa'),
			'nomeOutraEmpresa' => $this->input->post('nomeOutraEmpresa'),
			'clienteEscritorio' => $this->input->post('clienteEscritorio'),
			'empregadoAutonomo' => $this->input->post('empregadoAutonomo'),
			'nomeAtividadeAutonomo' => $this->input->post('nomeAtividadeAutonomo'),
			'valorRemuneracao' => $this->input->post('valorRemuneracao')
		);
		$this->socio_model->salvar($socio);
		$this->session->set_flashdata('success',"Sócio Salvo com Sucesso");
		redirect('socio/listar');
	}

	public function excluir($id){
		$this->load->model("socio_model");
		$socio = $this->socio_model->excluir($id);
		redirect('socio/listar');
	}
}