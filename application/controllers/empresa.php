<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresa  extends CI_Controller{

	public function listar(){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar();
		$dados=array('empresas'=>$empresa);
		$this->load->template("empresa/lista",$dados);

	}

	public function form($id=0){
		$this->load->model("empresa_model");
		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id));
		$dados=array("empresas"=>$empresa);
		$this->load->template("empresa/form",$dados);
	}

	public function excluir($id){
		$this->load->model("empresa_model");
		$this->load->model("historico_model");
		$usuario = $this->session->userdata['usuario_logado']['idUsuario'];
		$hoje = date("Y/m/d");
		$historico=array(
			'Usuario_idUsuario' => $usuario,
			'dataModificacao' => $hoje,
			'Empresa_idEmpresa' => $id,
			'acao' => 2
			);
		$this->historico_model->salvarHistorico($historico);
		$empresa=$this->empresa_model->excluir($id);
		$this->session->set_flashdata('success',"Empresa Excluída com Sucesso");
		redirect('empresa/listar');
	}


	public function cadastrar($id=0){
		// $this->form_validation->set_rules('nContmatic', "Nº Contmatic", "required");
		// $this->form_validation->set_rules('cnpj', "CNPJ", "required");
		// $this->form_validation->set_rules('razaoSocial', 'Razão Social', "required");
		// // $this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', "required");
		// $this->form_validation->set_rules('matrizFilial', 'Matriz Filial', "required");
		// $this->form_validation->set_rules('inscricaoMunicipal', 'Inscrição Municipal', "required");
		// $this->form_validation->set_rules('inscricaoEstadual', 'Inscrição Estadual', "required");
		// $this->form_validation->set_rules('telefone', 'Telefone', "required");
		// $this->form_validation->set_rules('telefoneResidencial', 'Telefone Residencial', "required");
		// $this->form_validation->set_rules('celular', 'Celular', "required");
		// $this->form_validation->set_rules('email', 'Email', "required");
		// $this->form_validation->set_rules('cep', 'CEP', "required");
		// $this->form_validation->set_rules('logradouro', 'Logradouro', "required");
		// $this->form_validation->set_rules('logradouroComercial', 'Logradouro Comercial', "required");
		// $this->form_validation->set_rules('numero', 'Número', "required");
		// $this->form_validation->set_rules('complemento', 'Complemento', "required");
		// $this->form_validation->set_rules('bairro', 'Bairro', "required");
		// $this->form_validation->set_rules('municipio', 'Município', "required");
		// $this->form_validation->set_rules('uf', 'UF', "required");
		// $this->form_validation->set_rules('atividade', 'Atividade', "required");
		// $this->form_validation->set_rules('inicioAtividade', 'Início Atividade', "required");
		// $this->form_validation->set_rules('dataAbertura', 'Data Abertura', "required");
		// $this->form_validation->set_rules('cnae', 'CNAE', "required");
		// $this->form_validation->set_rules('codCetesb', 'Código Cetesb', "required");
		// $this->form_validation->set_rules('codVigilancia', 'Código Vigilância', "required");
		// $this->form_validation->set_rules('codConselhoRegional', 'Código Conselho Regional', "required");
		// $this->form_validation->set_rules('codJucesp', 'Código Jucesp', "required");
		// $this->form_validation->set_rules('codAlvaraBombeiro', 'Código Alvará Bombeiro', "required");
		// $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		// $sucesso = $this->form_validation->run();
		// if($sucesso){
		$usuario = $this->session->userdata['usuario_logado']['idUsuario'];
		$hoje = date("Y/m/d");
		$this->load->model("historico_model");
		$this->load->model("empresa_model");
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
		$empresa=array(
			'idEmpresa' => $this->input->post('idEmpresa'),
			'tipoEmpresa' => $this->input->post('tipoEmpresa'),
			'enquadramento' => $this->input->post('enquadramento'),
			'tributacao' => $this->input->post('tributacao'),
			'ramoAtividade' => $this->input->post('ramoAtividade'),
			'statusEmpresa' => $this->input->post('statusEmpresa'),
			'nContmatic' => $this->input->post('nContmatic'),
			'cnpj' => $this->input->post('cnpj'),
			'razaoSocial' => $this->input->post('razaoSocial'),
			'nomeFantasia' => $this->input->post('nomeFantasia'),
			'matrizFilial' => $this->input->post('matrizFilial'),
			'inscricaoMunicipal' => $this->input->post('inscricaoMunicipal'),
			'inscricaoEstadual' => $this->input->post('inscricaoEstadual'),
			'telefone' => $this->input->post('telefone'),
			'telefoneResidencial' => $this->input->post('telefoneResidencial'),
			'celular' => $this->input->post('celular'),
			'email' => $this->input->post('email'),
			'cep' => $this->input->post('cep'),
			'logradouro' => $this->input->post('logradouro'),
			'logradouroComercial' => $this->input->post('logradouroComercial'),
			'numero' => $this->input->post('numero'),
			'complemento' => $this->input->post('complemento'),
			'bairro' => $this->input->post('bairro'),
			'municipio' => $this->input->post('municipio'),
			'uf' => $valor,
			'atividade' => $this->input->post('atividade'),
			'inicioAtividade' => $this->input->post('inicioAtividade'),
			'dataAbertura' => dataPtBrParaMysql($this->input->post('dataAbertura')),
			'cnae' => $this->input->post('cnae'),
			'codCetesb' => $this->input->post('codCetesb'),
			'codVigilancia' => $this->input->post('codVigilancia'),
			'codConselhoRegional' => $this->input->post('codConselhoRegional'),
			'codJucesp' => $this->input->post('codJucesp'),
			'codAlvaraBombeiro' => $this->input->post('codAlvaraBombeiro'),
			'avisoEmail' => $this->input->post('avisoEmail')
			);

$historico=array(
			'Usuario_idUsuario' => $usuario,
			'dataModificacao' => $hoje,
			'Empresa_idEmpresa' => $empresa['idEmpresa'],
			'acao' => 1
			);
$this->empresa_model->salvar($empresa);
$this->historico_model->salvarHistorico($historico);
$this->session->set_flashdata('success',"Empresa Salva com Sucesso");
redirect('empresa/listar');
	// 	} else{
	// 		$this->load->model("empresa_model");
	// 		$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id));
	// 		$dados=array("empresas"=>$empresa);
	// 		$this->load->template("empresa/form",$dados);
	// }

}

public function atividade($id_empresa,$id_atividade=0){
	$this->load->model("empresa_model");
	$this->load->model("atividade_model");
	$this->load->model("setor_model");
	$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id_empresa));	
	$empresaAtividadeSl=$this->empresa_model->listarAtividade(array("idAtividadeEmpresa"=>$id_atividade));
	$empresaAtividade=$this->empresa_model->listarAtividadeJoin(array("Empresa_idEmpresa"=>$id_empresa));
	$Atividade=$this->atividade_model->listar();
	$setor=$this->empresa_model->listarSetorDis(array("idEmpresa"=>$id_empresa));
	$dados=array("empresas"=>$empresa,"empresaAtividades"=>$empresaAtividade,"atividades"=>$Atividade,"setores"=>$setor,"AtividadeSelecionada"=>$empresaAtividadeSl);
	$this->load->template("empresa/atividade",$dados);		


}

public function cadAtividade(){
	$this->load->model("empresa_model");
	$data=dataPtBrParaMysql($this->input->post("dataControle"));
	$atividade=array(
		"idAtividadeEmpresa" => $this->input->post("idAtividadeEmpresa"),
		"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
		"Setor_idSetor" => $this->input->post("Setor_idSetor"),
		"Atividade_idAtividade" => $this->input->post("Atividade_idAtividade"),
		"tipo" => $this->input->post("tipo"),
		"dataControle" => $data);
	$this->empresa_model->cadAtividade($atividade);
	$this->session->set_flashdata('success',"Atividade vinculada Sucesso");
	redirect('empresa/atividade/'.$this->input->post("Empresa_idEmpresa"));

}
public function excluirAtividade($id_atividade,$id_empresa){
	$this->load->model("empresa_model");
	$empresa=$this->empresa_model->excluirAtividade($id_atividade);
	$this->session->set_flashdata('success',"Atividade Excluida com Sucesso");
	redirect('empresa/atividade/'.$id_empresa);



}

public function responsaveis($id_empresa,$id_atividade=0){
	$this->load->model("empresa_model");
	$this->load->model("usuarios_model");
	$this->load->model("setor_model");
	$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id_empresa));
	$setor=$this->setor_model->listar();
	$usuario=$this->usuarios_model->listar();
	$setorUsuarioSl=$this->empresa_model->listarSetorJoin(array("idSetorUsuario"=>$id_atividade));
	$setorUsuario=$this->empresa_model->listarSetorJoin(array("idEmpresa"=>$id_empresa));
	$dados=array("empresas"=>$empresa,"setorUsuarioEmpresa"=>$setorUsuario,"usuarios"=>$usuario,"setores"=>$setor,"responsaveis"=>$setorUsuarioSl);
	$this->load->template("empresa/responsaveis",$dados);


}

public function cadResponsavel(){
	$this->load->model("empresa_model");

	$responsavel=array(
		"idSetorUsuario" => $this->input->post("idSetorUsuario"),
		"Empresa_idEmpresa" => $this->input->post("Empresa_idEmpresa"),
		"Setor_idSetor" => $this->input->post("Setor_idSetor"),
		"Usuario_idUsuario" => $this->input->post("Usuario_idUsuario"));
	$this->empresa_model->cadResponsavel($responsavel);
	$this->session->set_flashdata('success',"Atividade vinculada Sucesso");
	redirect('empresa/responsaveis/'.$this->input->post("Empresa_idEmpresa"));

}
public function excluirResponsaveis($id_responsavel,$id_empresa){
	$this->load->model("empresa_model");
	$empresa=$this->empresa_model->excluirResponsavel($id_responsavel);
	$this->session->set_flashdata('success',"Atividade Excluida com Sucesso");
	redirect('empresa/responsaveis/'.$id_empresa);



}


}
