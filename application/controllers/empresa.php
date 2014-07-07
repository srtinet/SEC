
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
		$empresa=$this->empresa_model->excluir($id);
		redirect('empresa/listar');
	}


	public function cadastrar($id=0){
		$this->form_validation->set_rules('nContmatic', "Nº Contmatic", "required");
		$this->form_validation->set_rules('cnpj', "Nº Contmatic", "required");
		$this->form_validation->set_rules('razaoSocial', 'Razão Social', "required");
		$this->form_validation->set_rules('nomeFantasia', 'Nome Fantasia', "required");
		$this->form_validation->set_rules('matrizFilial', 'Matriz Filial', "required");
		$this->form_validation->set_rules('inscricaoMunicipal', 'Inscrição Municipal', "required");
		$this->form_validation->set_rules('inscricaoEstadual', 'Inscrição Estadual', "required");
		$this->form_validation->set_rules('telefone', 'Telefone', "required");
		$this->form_validation->set_rules('telefoneResidencial', 'Telefone Residencial', "required");
		$this->form_validation->set_rules('celular', 'Celular', "required");
		$this->form_validation->set_rules('email', 'Email', "required");
		$this->form_validation->set_rules('cep', 'CEP', "required");
		$this->form_validation->set_rules('tipoLogradouro', 'Tipo Logradouro', "required");
		$this->form_validation->set_rules('logradouroComercial', 'Logradouro Comercial', "required");
		$this->form_validation->set_rules('numero', 'Número', "required");
		$this->form_validation->set_rules('complemento', 'Complemento', "required");
		$this->form_validation->set_rules('bairro', 'Bairro', "required");
		$this->form_validation->set_rules('municipio', 'Município', "required");
		$this->form_validation->set_rules('uf', 'UF', "required");
		$this->form_validation->set_rules('atividade', 'Atividade', "required");
		$this->form_validation->set_rules('inicioAtividade', 'Início Atividade', "required");
		$this->form_validation->set_rules('dataAbertura', 'Data Abertura', "required");
		$this->form_validation->set_rules('cnae', 'CNAE', "required");
		$this->form_validation->set_rules('remessaCetesb', 'Remessa Cetesb', "required");
		$this->form_validation->set_rules('retornoCetesb', 'Retorno Cetesb', "required");
		$this->form_validation->set_rules('statusCetesb', 'Status Cetesb', "required");
		$this->form_validation->set_rules('remessaVigilancia', 'Remessa Vigilância', "required");
		$this->form_validation->set_rules('retornoVigilancia', 'Retorno Vigilância', "required");
		$this->form_validation->set_rules('statusVigilancia', 'Status Vigilância', "required");
		$this->form_validation->set_rules('remessaConselhoRegional', 'Remessa Conselho Regional', "required");
		$this->form_validation->set_rules('retornoConselhoRegional', 'Retorno Conselho Regional', "required");
		$this->form_validation->set_rules('statusConselhoRegional', 'Status Conselho Regional', "required");
		$this->form_validation->set_rules('remessaJucesp', 'Remessa Jucesp', "required");
		$this->form_validation->set_rules('retornoJucesp', 'Retorno Jucesp', "required");
		$this->form_validation->set_rules('statusJucesp', 'Status Jucesp', "required");
		$this->form_validation->set_rules('remessaAlvaraBombeiro', 'Remessa Alvará Bombeiro', "required");
		$this->form_validation->set_rules('remessaAlvaraBombeiro', 'Remessa Alvará Bombeiro', "required");
		$this->form_validation->set_rules('retornoAlvaraBombeiro', 'Retorno Alvará Bombeiro', "required");
		$this->form_validation->set_rules('statusAlvaraBombeiro', 'Status Alvará Bombeiro', "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
		$sucesso = $this->form_validation->run();
		if($sucesso){
			$this->load->model("empresa_model");
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
				'tipoLogradouro' => $this->input->post('tipoLogradouro'),
				'logradouroComercial' => $this->input->post('logradouroComercial'),
				'numero' => $this->input->post('numero'),
				'complemento' => $this->input->post('complemento'),
				'bairro' => $this->input->post('bairro'),
				'municipio' => $this->input->post('municipio'),
				'uf' => $this->input->post('uf'),
				'atividade' => $this->input->post('atividade'),
				'inicioAtividade' => $this->input->post('inicioAtividade'),
				'dataAbertura' => $this->input->post('dataAbertura'),
				'cnae' => $this->input->post('cnae'),
				'remessaCetesb' => $this->input->post('remessaCetesb'),
				'retornoCetesb' => $this->input->post('retornoCetesb'),
				'statusCetesb' => $this->input->post('statusCetesb'),
				'remessaVigilancia' => $this->input->post('remessaVigilancia'),
				'retornoVigilancia' => $this->input->post('retornoVigilancia'),
				'statusVigilancia' => $this->input->post('statusVigilancia'),
				'remessaConselhoRegional' => $this->input->post('remessaConselhoRegional'),
				'retornoConselhoRegional' => $this->input->post('retornoConselhoRegional'),
				'statusConselhoRegional' => $this->input->post('statusConselhoRegional'),
				'remessaJucesp' => $this->input->post('remessaJucesp'),
				'retornoJucesp' => $this->input->post('retornoJucesp'),
				'statusJucesp' => $this->input->post('statusJucesp'),
				'remessaAlvaraBombeiro' => $this->input->post('remessaAlvaraBombeiro'),
				'retornoAlvaraBombeiro' => $this->input->post('retornoAlvaraBombeiro'),
				'statusAlvaraBombeiro' => $this->input->post('statusAlvaraBombeiro')
				);
			$this->empresa_model->salvar($empresa);
			$this->session->set_flashdata('success',"Empresa Salva com Sucesso");
			redirect('empresa/listar');
		} else{
			$this->load->model("empresa_model");
			$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id));
			$dados=array("empresas"=>$empresa);
			$this->load->template("empresa/form",$dados);
	}

}

public function atividade($id_empresa,$id_atividade=0){
	$this->load->model("empresa_model");
	$this->load->model("atividade_model");
	$this->load->model("setor_model");
	$empresa=$this->empresa_model->listar(array("idEmpresa"=>$id_empresa));	
	$empresaAtividadeSl=$this->empresa_model->listarAtividade(array("idAtividadeEmpresa"=>$id_atividade));
	$empresaAtividade=$this->empresa_model->listarAtividadeJoin(array("Empresa_idEmpresa"=>$id_empresa));
	$Atividade=$this->atividade_model->listar();
	$setor=$this->setor_model->listar();
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

public function  responsaveis($id_empresa,$id_atividade=0){
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
