<?php
if($empresas){
	foreach($empresas as $empresa){
		$idEmpresa = $empresa['idEmpresa'];
		$tipoEmpresa = $empresa['tipoEmpresa'];
		$enquadramento = $empresa['enquadramento'];
		$tributacao = $empresa['tributacao'];
		$dataTributacao = $empresa['dataTributacao'];
		$pagamentoImpostoRenda = $empresa['pagamentoImpostoRenda'];
		$formaPagamento = $empresa['formaPagamento'];
		$pagadorImposto = $empresa['pagadorImposto'];
		$ramoAtividade = $empresa['ramoAtividade'];
		$statusEmpresa = $empresa['statusEmpresa'];
		$nContmatic = $empresa['nContmatic'];
		$cnpj = $empresa['cnpj'];
		$razaoSocial = $empresa['razaoSocial'];
		$nomeFantasia = $empresa['nomeFantasia'];
		$matrizFilial = $empresa['matrizFilial'];
		$inscricaoMunicipal = $empresa['inscricaoMunicipal'];
		$inscricaoEstadual = $empresa['inscricaoEstadual'];
		$telefone = $empresa['telefone'];
		$telefoneResidencial = $empresa['telefoneResidencial'];
		$celular = $empresa['celular'];
		$email = $empresa['email'];
		$cep = $empresa['cep'];
		$logradouro = $empresa['logradouro'];
		$logradouroComercial = $empresa['logradouroComercial'];
		$numero = $empresa['numero'];
		$complemento = $empresa['complemento'];
		$bairro = $empresa['bairro'];
		$municipio = $empresa['municipio'];
		switch($empresa['uf']){
			case 1:
			$empresa['uf'] = 'AC';
			case 2:
			$empresa['uf'] = 'AL';
			break;
			case 3:
			$empresa['uf'] = 'AP';
			break;
			case 4:
			$empresa['uf'] = 'AM';
			break;
			case 5:
			$empresa['uf'] = 'BA';
			break;
			case 6:
			$empresa['uf'] = 'CE';
			break;
			case 7:
			$empresa['uf'] = 'DF';
			break;
			case 8:
			$empresa['uf'] = 'ES';
			break;
			case 9:
			$empresa['uf'] = 'GO';
			break;
			case 10:
			$empresa['uf'] = 'MA';
			break;
			case 11:
			$empresa['uf'] = 'MT';
			break;
			case 12:
			$empresa['uf'] = 'MS';
			break;
			case 13:
			$empresa['uf'] = 'MG';
			break;
			case 14:
			$empresa['uf'] = 'PB';
			break;
			case 15:
			$empresa['uf'] = 'PR';
			break;
			case 16:
			$empresa['uf'] = 'PI';
			break;
			case 17:
			$empresa['uf'] = 'RJ';
			break;
			case 18:
			$empresa['uf'] = 'RN';
			break;
			case 19:
			$empresa['uf'] = 'RS';
			break;
			case 20:
			$empresa['uf'] = 'RO';
			break;
			case 21:
			$empresa['uf'] = 'RR';
			break;
			case 22:
			$empresa['uf'] = 'SC';
			break;
			case 23:
			$empresa['uf'] = 'SP';
			break;
			case 24:
			$empresa['uf'] = 'SE';
			break;
			case 25:
			$empresa['uf'] = 'TO';
			break;
		}
		$uf = $empresa['uf'];
		$atividade = $empresa['atividade'];
		$inicioAtividade = $empresa['inicioAtividade'];
		$dataAbertura = $empresa['dataAbertura'];
		$cnae = $empresa['cnae'];
		$codCetesb = $empresa['codCetesb'];
		$codVigilancia = $empresa['codVigilancia'];
		$codConselhoRegional = $empresa['codConselhoRegional'];
		$codJucesp = $empresa['codJucesp'];
		$codAlvaraBombeiro = $empresa['codAlvaraBombeiro'];
		$avisoEmail = $empresa['avisoEmail'];

	}
}else{
	$idEmpresa = '';
	$tipoEmpresa = '';
	$enquadramento = '';
	$tributacao = '';
	$dataTributacao = '0000/00/00';
	$pagamentoImpostoRenda = '';
	$formaPagamento = '';
	$pagadorImposto = '';
	$ramoAtividade = '';
	$statusEmpresa = '';
	$nContmatic = '';
	$cnpj = '';
	$razaoSocial = '';
	$nomeFantasia = '';
	$matrizFilial = '';
	$inscricaoMunicipal = '';
	$inscricaoEstadual = '';
	$telefone = '';
	$telefoneResidencial = '';
	$celular = '';
	$email = '';
	$cep = '';
	$logradouro = '';
	$logradouroComercial = '';
	$numero = '';
	$complemento = '';
	$bairro = '';
	$municipio = '';
	$uf = '';
	$atividade = '';
	$inicioAtividade = '';
	$dataAbertura = '0000/00/00';
	$cnae = '';
	$codCetesb = '';
	$codVigilancia = '';
	$codConselhoRegional = '';
	$codJucesp = '';
	$codAlvaraBombeiro = '';
	$avisoEmail = '';
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Abertura de Empresa</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("empresa/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
<?php
echo form_open("empresa/cadastrar");
echo form_hidden('idEmpresa', $idEmpresa);
$options = array(
	'1'  => 'Empresário Individual',
	'2'    => 'Sociedade Empresária Limitada',
	'3'   => 'Sociedade Simples Limitada',
	'4'   => 'Sociedade Simples Pura',
	'5'   => 'Associação Privada',
	'6'   => 'Cooperativa',
	'7'   => 'Entidade Sindical',
	'8'   => 'Empresa Individual de Responsabilidade LTDA',
	'9'   => 'PF',
	'10'   => 'MEI',
	'11'   => 'SIMEI'
	);
echo inputList("tipoEmpresa","Tipo de Empresa",$options, $tipoEmpresa);


$options = array(
	'1'  => 'Enquadra na condição ME',
	'2'    => 'Enquadra na condição de EPP',
	'3'   => 'Reenquadra na condição de DE ME PARA EPP',
	'4'   => 'Reenquadra na condição DE EPP PARA ME',
	'5'   => 'Desenquadra da condição de ME-EPP',
	'6'   => 'EIRELI'
	);
echo inputList("enquadramento","Enquadramento",$options, $enquadramento);

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Lucro Presumido',
	'2'    => 'Lucro Real',
	'3'   => 'Simples Nacional',
	'4'   => 'Outros'
	);
echo inputList("tributacao","Tributação",$options, $tributacao);
echo DataPicker("dataTributacao","Data da Tributação",$dataTributacao);
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Trimestral',
	'2'  => 'Mensal'
	);
echo inputListSumir("pagamentoImpostoRenda","Pagamento do Imposto de Renda",$options, $pagamentoImpostoRenda, "pagamentoImpostoRenda", "caixaLista");
echo '<div id="caixaLista">';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Cota única',
	'2'  => 'Três Parcelas'
	);
echo inputList("formaPagamento","Forma de Pagamento",$options, $formaPagamento);
echo '</div>';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Escritório',
	'2'    => 'Cliente'
	);
echo inputList("pagadorImposto","Quem paga o Imposto?",$options, $pagadorImposto);
$options = array(
	'1'  => 'Indústria/Comércio',
	'2'    => 'Indústria/Comércio/Servicos',
	'3'   => 'Comércio',
	'4'   => 'Comércio/Servicos',
	'5'  => 'Micro Empresa',
	'6'    => 'ME/Serviços',
	'7'   => 'ME/Industria/Serviços',
	'8'   => 'Prestação de Serviços'
	);
echo inputList("ramoAtividade","Ramo de Atividade",$options, $ramoAtividade);

$options = array(
	'1'  => 'ABERTA',
	'2'    => 'FECHADA',
	'3'   => 'EM ANDAMENTO',
	'4'   => 'INATIVA',
	'5'  => 'SEM MOVIMENTO',
	'6'   => 'TRANSFERIDA PARA OUTRO ESCRITÓRIO'
	);
echo inputList("statusEmpresa","Status da Empresa",$options, $statusEmpresa);
?>

<h3>Dados da Empresa</h3>

<?php
echo inputText("nContmatic","Nº Contmatic",$nContmatic);
		// echo form_error("descricao");
echo inputText("cnpj","CNPJ",$cnpj);
echo form_error("cnpj");
echo inputText("razaoSocial","Razão Social",$razaoSocial);
echo form_error("razaoSocial");
echo inputText("nomeFantasia","Nome Fantasia",$nomeFantasia);
		// echo form_error("nomeFantasia");

$options = array(
	'1'  => 'FILIAL',
	'2'    => 'MATRIZ'
	);
echo inputList("matrizFilial","Matriz Filial",$options, $matrizFilial);

echo inputText("inscricaoMunicipal","Inscrição Municipal",$inscricaoMunicipal);
echo form_error("inscricaoMunicipal");
echo inputText("inscricaoEstadual","Inscrição Estadual",$inscricaoEstadual);
echo form_error("inscricaoEstadual");
echo inputText("telefone","Telefone",$telefone);
echo form_error("telefone");
echo inputText("telefoneResidencial","Telefone Residencial",$telefoneResidencial);
echo form_error("telefoneResidencial");
echo inputText("celular","Celular",$celular);
echo form_error("celular");
echo inputText("email","Email",$email);
echo form_error("email");
?>

<h3>Endereço</h3>

<?php
echo inputTextCep("cep","Cep",$cep);
echo form_error("cep");
echo inputText("logradouro","Logradouro",$logradouro);
echo form_error("logradouro");
echo inputText("logradouroComercial","Logradouro Comercial",$logradouroComercial);
echo form_error("logradouroComercial");
echo inputText("numero","Número",$numero);
echo form_error("numero");
echo inputText("complemento","Complemento",$complemento);
echo form_error("complemento");
echo inputText("bairro","Bairro",$bairro);
echo form_error("bairro");
echo inputText("municipio","Municipio",$municipio);
echo form_error("municipio");
echo inputText("uf","UF", $uf);
echo form_error("uf");

?>

<h3>Atividade da Empresa</h3>

<?php
echo inputText("atividade","Atividade",$atividade);
echo form_error("atividade");
echo DataPicker("inicioAtividade","Inicio Atividade",$inicioAtividade);
echo form_error("inicioAtividade");
echo DataPicker("dataAbertura","Data Abertura",$dataAbertura);
echo form_error("dataAbertura");
echo inputText("cnae","CNAE",$cnae);
echo form_error("cnae");
?>

<h3>Orgãos</h3>

<?php
echo inputText("codCetesb","Código Cetesb", $codCetesb);
echo inputText("codVigilancia","Código Vigilância", $codVigilancia);
echo inputText("codConselhoRegional","Código Conselho Regional", $codConselhoRegional);
echo inputText("codJucesp","Código Jucesp", $codJucesp);
echo inputText("codAlvaraBombeiro","Código Alvará Bombeiro", $codAlvaraBombeiro);
echo '<h1>Aviso por Email</h1>';

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("avisoEmail","Deseja ser avisado por E-mail?",$options, $avisoEmail, "avisoEmail", "caixaLista");

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();


?>
