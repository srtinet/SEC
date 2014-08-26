<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socio extends CI_Controller{

	public function listar($idEmpresa){
		$this->output->enable_profiler(TRUE);
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

	public function cadastrar($idEmpresa=0, $id=0){
		// $this->form_validation->set_rules('nome', "Nome", "required");
		// $this->form_validation->set_rules('estadoCivil', "Estado Civil", "required");
		// $this->form_validation->set_rules('cpf', 'CPF', "required");
		// $this->form_validation->set_rules('rg', 'RG', "required");
		// $this->form_validation->set_rules('tituloEleitor', 'Titulo Eleitor', "required");
		// $this->form_validation->set_rules('orgaoEmissorRg', 'Orgão Emissor RG', "required");
		// $this->form_validation->set_rules('dataExpedicao', 'Data Expedição', "required");
		// $this->form_validation->set_rules('dataNascimento', 'Data Nascimento', "required");
		// $this->form_validation->set_rules('uf', 'UF', "required");
		// $this->form_validation->set_rules('naturalindade', 'Naturalidade', "required");
		// $this->form_validation->set_rules('cep', 'CEP', "required");
		// $this->form_validation->set_rules('nReciboIr', 'Número Recibo IR', "required");
		// $this->form_validation->set_rules('capitalSocial', 'Capital Social', "required");
		// $this->form_validation->set_rules('tipoParticipacao', 'Tipo Participação', "required");
		// $this->form_validation->set_rules('porcentagemSocio', 'Porcentagem Sócio', "required");
		// $this->form_validation->set_rules('capitalSocioalDoSocio', 'Capital Socioal Do Sócio', "required");
		// $this->form_validation->set_rules('proLabore', 'Pró Labore', "required");
		// $this->form_validation->set_rules('valorProLabore', 'Valor Pró Labore', "required");
		// $this->form_validation->set_rules('aposentado', 'Aposentado', "required");
		// $this->form_validation->set_rules('dataAposentadoriaIdade', 'Data da Aposentadoria por Idade', "required");
		// $this->form_validation->set_rules('dataAposentadoriaContribuicao', 'Data da Aposentadoria por Contribuição', "required");
		// $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		// $sucesso = $this->form_validation->run();
		// if($sucesso){
		$this->load->model("socio_model");
		$valor = $this->input->post('uf');
		switch($valor){
			case 'AC':
			$valor = 1;
			break;
			case 'AL':
			$valor = 2;
			break;
			case 'AP':
			$valor = 3;
			break;
			case 'AM':
			$valor = 4;
			break;
			case 'BA':
			$valor = 5;
			break;
			case 'CE':
			$valor = 6;
			break;
			case 'DF':
			$valor = 7;
			break;
			case 'ES':
			$valor = 8;
			break;
			case 'GO':
			$valor = 9;
			break;
			case 'MA':
			$valor = 10;
			break;
			case 'MT':
			$valor = 11;
			break;
			case 'MS':
			$valor = 12;
			break;
			case 'MG':
			$valor = 13;
			break;
			case 'PB':
			$valor = 14;
			break;
			case 'PR':
			$valor = 15;
			break;
			case 'PI':
			$valor = 16;
			break;
			case 'RJ':
			$valor = 17;
			break;
			case 'RN':
			$valor = 18;
			break;
			case 'RS':
			$valor = 19;
			break;
			case 'RO':
			$valor = 20;
			break;
			case 'RR':
			$valor = 21;
			break;
			case 'SC':
			$valor = 22;
			break;
			case 'SP':
			$valor = 23;
			break;
			case 'SE':
			$valor = 24;
			break;
			case 'TO':
			$valor = 25;
			break;
		}

		$socio = array(
			'idSocio' => $this->input->post('idSocio'),
			'Empresa_idEmpresa' => $this->input->post('idEmpresa'),
			'nome' => $this->input->post('nome'),
			'estadoCivil' => $this->input->post('estadoCivil'),
			'cpf' => $this->input->post('cpf'),
			'rg' => $this->input->post('rg'),
			'tituloEleitor' => $this->input->post('tituloEleitor'),
			'orgaoEmissorRg' => $this->input->post('orgaoEmissorRg'),
			'dataExpedicao' => dataPtBrParaMysql($this->input->post('dataExpedicao')),
			'dataNascimento' => dataPtBrParaMysql($this->input->post('dataNascimento')),
			'uf' => $valor,
			'naturalidade' => $this->input->post('naturalidade'),
			'logradouro' => $this->input->post('logradouro'),
			'numero' => $this->input->post('numero'),
			'bairro' => $this->input->post('bairro'),
			'numero' => $this->input->post('numero'),
			'municipio' => $this->input->post('municipio'),
			'complemento' => $this->input->post('complemento'),
			'cep' => $this->input->post('cep'),
			'nReciboIr' => $this->input->post('nReciboIr'),
			'capitalSocial'=> $this->input->post('capitalSocial'),
			'tipoParticipacao' => $this->input->post('tipoParticipacao'),
			'porcentagemSocio' => $this->input->post('porcentagemSocio'),
			'capitalSocioalDoSocio' => $this->input->post('capitalSocioalDoSocio'),
			'inicioContribuicao' => $this->input->post('inicioContribuicao'),
			'proLabore' => $this->input->post('proLabore'),
			'valorProLabore' => $this->input->post('valorProLabore'),
			'aposentado' => $this->input->post('aposentado'),
			'dataAposentadoriaIdade' => dataPtBrParaMysql($this->input->post('dataAposentadoriaIdade')),
			'dataAposentadoriaContribuicao' => dataPtBrParaMysql($this->input->post('dataAposentadoriaContribuicao')),
			'dependente' => $this->input->post('dependente'),
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
// }else{
// 	$this->load->model("socio_model");
// 	$socio = $this->socio_model->listar(array("idSocio"=>$id));
// 	$dados = array('socios' => $socio,"idEmpresa"=>$idEmpresa);
// 	$this->load->template("socio/form", $dados);
// }
}

public function excluir($idEmpresa, $id){
	$this->load->model("socio_model");
	$socio = $this->socio_model->excluir($id);
	redirect('socio/listar/'.$idEmpresa);
}
}