<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socio extends CI_Controller{

	public function listar($idEmpresa){
		$this->load->model("socio_model");
		$socio = $this->socio_model->listarSocioEmpresa(array('idEmpresa' => $idEmpresa));
		$dados = array('socios' => $socio, 'idEmpresa' => $idEmpresa);
		$this->load->template("socio/lista", $dados);
		}
	public function form($idEmpresa, $id=0){
		$this->load->model("socio_model");
		$socio = $this->socio_model->listar(array("idSocio"=>$id));
		$dados = array('socios' => $socio,"idEmpresa"=>$idEmpresa);
		$this->load->template("socio/form", $dados);
	}

	public function cadastrar(){
		$this->load->model("socio_model");
		$socio = array(
			'idSocio' => $this->input->post('idSocio'),
			'Empresa_idEmpresa' => $this->input->post('idEmpresa'),
			'nome' => $this->input->post('nome'),
			'estadoCivil' => $this->input->post('estadoCivil'),
			'cpf' => $this->input->post('cpf'),
			'rg' => $this->input->post('rg'),
			'tituloEleitor' => $this->input->post('tituloEleitor'),
			'orgaoEmissorRg' => $this->input->post('orgaoEmissorRg'),
			'dataExpedicao' => $this->input->post('dataExpedicao'),
			'dataNascimento' => $this->input->post('dataNascimento'),
			'uf' => $this->input->post('uf'),
			'naturalidade' => $this->input->post('naturalidade'),
			'tipoLogradouro' => $this->input->post('tipoLogradouro'),
			'logradouro' => $this->input->post('logradouro'),
			'numero' => $this->input->post('numero'),
			'bairro' => $this->input->post('bairro'),
			'numero' => $this->input->post('numero'),
			'municipio' => $this->input->post('municipio'),
			'complemento' => $this->input->post('complemento'),
			'cep' => $this->input->post('cep'),
			'numero' => $this->input->post('numero'),
			'nReciboIr' => $this->input->post('nReciboIr'),
			'capitalSocial'=> $this->input->post('capitalSocial'),
			'tipoParticipacao' => $this->input->post('tipoParticipacao'),
			'porcentagemSocio' => $this->input->post('porcentagemSocio'),
			'capitalSocioalDoSocio' => $this->input->post('capitalSocioalDoSocio'),
			'inicioContribuicao' => $this->input->post('inicioContribuicao'),
			'proLabore' => $this->input->post('proLabore'),
			'valorProLabore' => $this->input->post('valorProLabore'),
			'aposentado' => $this->input->post('aposentado'),
			'dataAposentadoriaIdade' => $this->input->post('dataAposentadoriaIdade'),
			'dataAposentadoriaContribuicao' => $this->input->post('dataAposentadoriaContribuicao'),
			'dependente' => $this->input->post('dependente'),
			'nomeDependente' => $this->input->post('nomeDependente'),
			'dataNascimentoDependente' => $this->input->post('dataNascimentoDependente'),
			'empregadaDomestica' => $this->input->post('empregadaDomestica'),
			'rotinaTrabalhista' => $this->input->post('rotinaTrabalhista'),
			'nomeEmpregadaDomestica' => $this->input->post('nomeEmpregadaDomestica'),
			'cpfDomestica' => $this->input->post('cpfDomestica'),
			'nitDomestica' => $this->input->post('nitDomestica'),
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
		redirect('socio/listar/'.$this->input->post("idEmpresa"));
	}

	public function excluir($idEmpresa, $id){
		$this->load->model("socio_model");
		$socio = $this->socio_model->excluir($id);
		redirect('socio/listar/'.$idEmpresa);
	}
}