<script>
// function consultacep(cep){
// 	cep = cep.replace(/\D/g,"")
// 	url="http://cep.correiocontrol.com.br/"+cep+".js"
// 	s=document.createElement('script')
// 	s.setAttribute('charset','utf-8')
// 	s.src=url
// 	document.querySelector('head').appendChild(s)
// }

// function correiocontrolcep(valor){
// 	if (valor.erro) {
// 		alert('Cep não encontrado');
// 		return;
// 	};
// 	// '1'  => 'Acre - AC',
// 	// '2'  => 'Alagoas - ',
// 	// '3'  => 'Amapá - AP',
// 	// '4'  => 'Amazonas - AM',
// 	// '5'  => 'Bahia  - BA',
// 	// '6'  => 'Ceará - CE',
// 	// '7'  => 'Distrito Federal  - DF',
// 	// '8'  => 'Espírito Santo - ES',
// 	// '9'  => 'Goiás - GO',
// 	// '10' => 'Maranhão - MA',
// 	// '11' => 'Mato Grosso - MT',
// 	// '12' => 'Mato Grosso do Sul - MS',
// 	// '13' => 'Minas Gerais - MG',
// 	// '14' => 'Paraíba - PB',
// 	// '15' => 'Paraná - PR',
// 	// '16' => 'Piauí - PI',
// 	// '17' => 'Rio de Janeiro - RJ',
// 	// '18' => 'Rio Grande do Norte - RN',
// 	// '19' => 'Rio Grande do Sul - RS',
// 	// '20' => 'Rondônia - RO',
// 	// '21' => 'Roraima - RR',
// 	// '22' => 'Santa Catarina - SC',
// 	// '23' => 'São Paulo - SP',
// 	// '24' => 'Sergipe - SE',
// 	// '25' => 'Tocantins - TO'
// 	// document.getElementById('rua').value=valor.rua
	
// 	document.getElementById('bairro').value=valor.bairro
// 	document.getElementById('logradouro').value=valor.logradouro
// 	document.getElementById('municipio').value=valor.localidade
// 	document.getElementById('uf').value=valor.uf

// 	switch(valor.uf){
// 		case 'AC':
// 		valor.uf = 1;
// 		case 'AL':
// 		valor.uf = 2;
// 		case 'AP':
// 		valor.uf = 3;
// 		case 'AM':
// 		valor.uf = 4;
// 		case 'BA':
// 		valor.uf = 5;
// 		case 'CE':
// 		valor.uf = 6;
// 		case 'DF':
// 		valor.uf = 7;
// 		case 'ES':
// 		valor.uf = 8;
// 		case 'GO':
// 		valor.uf = 9;
// 		case 'MA':
// 		valor.uf = 10;
// 		case 'MT':
// 		valor.uf = 11;
// 		case 'MS':
// 		valor.uf = 12;
// 		case 'MG':
// 		valor.uf = 13;
// 		case 'PB':
// 		valor.uf = 14;
// 		case 'PR':
// 		valor.uf = 15;
// 		case 'PI':
// 		valor.uf = 16;
// 		case 'RJ':
// 		valor.uf = 17;
// 		case 'RN':
// 		valor.uf = 18;
// 		case 'RS':
// 		valor.uf = 19;
// 		case 'RO':
// 		valor.uf = 20;
// 		case 'RR':
// 		valor.uf = 21;
// 		case 'SC':
// 		valor.uf = 22;
// 		case 'SP':
// 		valor.uf = 23;
// 		case 'SE':
// 		valor.uf = 24;
// 		case 'TO':
// 		valor.uf = 25;
// 	}


// }
// </script>
<?php


if($empresas){
	foreach($empresas as $empresa){

		$idEmpresa = $empresa['idEmpresa'];
		$tipoEmpresa = $empresa['tipoEmpresa'];
		$enquadramento = $empresa['enquadramento'];
		$tributacao = $empresa['tributacao'];
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
		$remessaCetesb = $empresa['remessaCetesb'];
		$retornoCetesb = $empresa['retornoCetesb'];
		$statusCetesb = $empresa['statusCetesb'];
		$remessaVigilancia = $empresa['remessaVigilancia'];
		$retornoVigilancia = $empresa['retornoVigilancia'];
		$statusVigilancia = $empresa['remessaVigilancia'];
		$remessaConselhoRegional = $empresa['remessaConselhoRegional'];
		$retornoConselhoRegional = $empresa['retornoConselhoRegional'];
		$statusConselhoRegional = $empresa['statusConselhoRegional'];
		$remessaJucesp = $empresa['remessaJucesp'];
		$retornoJucesp = $empresa['retornoJucesp'];
		$statusJucesp = $empresa['statusJucesp'];
		$remessaAlvaraBombeiro = $empresa['remessaAlvaraBombeiro'];
		$retornoAlvaraBombeiro = $empresa['retornoAlvaraBombeiro'];
		$statusAlvaraBombeiro = $empresa['statusAlvaraBombeiro'];

	}
}else{

	$idEmpresa = '';
	$tipoEmpresa = '';
	$enquadramento = '';
	$tributacao = '';
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
	$dataAbertura = '';
	$cnae = '';
	$remessaCetesb = '';
	$retornoCetesb = '';
	$statusCetesb = '';
	$remessaVigilancia = '';
	$retornoVigilancia = '';
	$statusVigilancia = '';
	$remessaConselhoRegional = '';
	$retornoConselhoRegional = '';
	$statusConselhoRegional = '';
	$remessaJucesp = '';
	$retornoJucesp = '';
	$statusJucesp = '';
	$remessaAlvaraBombeiro = '';
	$retornoAlvaraBombeiro = '';
	$statusAlvaraBombeiro = '';
}?>
<h3>Abertura de Empresa</h3>
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
	'1'  => 'Lucro Presumido',
	'2'    => 'Lucro Real',
	'3'   => 'Simples Nacional',
	'4'   => 'Outros'
	);
echo inputList("tributacao","Tributação",$options, $tributacao);

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
echo DataPicker("remessaCetesb","Remessa Cetesb",$remessaCetesb);
echo form_error("remessaCetesb");
echo DataPicker("retornoCetesb","Retorno Cetesb",$retornoCetesb);
echo form_error("retornoCetesb");

$options = array(
	'1'  => 'APROVADO',
	'2'    => 'REPROVADO',
	'3'    => 'EM ANDAMENTO',
	'4'    => 'CORREÇÃO'
	);
echo inputList("statusCetesb","Status Cetesb",$options, $statusCetesb);

echo DataPicker("remessaVigilancia","Remessa Vigilancia",$remessaVigilancia);
echo form_error("remessaVigilancia");
echo DataPicker("retornoVigilancia","Retorno Vigilancia",$retornoVigilancia);
echo form_error("retornoVigilancia");

$options = array(
	'1'  => 'APROVADO',
	'2'    => 'REPROVADO',
	'3'    => 'EM ANDAMENTO',
	'4'    => 'CORREÇÃO'
	);
echo inputList("statusVigilancia","Status Vigilância",$options, $statusVigilancia);

echo DataPicker("remessaConselhoRegional","Remessa ConselhoRegional",$remessaConselhoRegional);
echo form_error("remessaConselhoRegional");
echo DataPicker("retornoConselhoRegional","Retorno ConselhoRegional",$retornoConselhoRegional);
echo form_error("retornoConselhoRegional");

$options = array(
	'1'  => 'APROVADO',
	'2'    => 'REPROVADO',
	'3'    => 'EM ANDAMENTO',
	'4'    => 'CORREÇÃO'
	);
echo inputList("statusConselhoRegional","Status Conselho Regional",$options, $statusConselhoRegional);

echo DataPicker("remessaJucesp","Remessa Jucesp",$remessaJucesp);
echo form_error("remessaJucesp");
echo DataPicker("retornoJucesp","Retorno Jucesp",$retornoJucesp);
echo form_error("retornoJucesp");

$options = array(
	'1'  => 'APROVADO',
	'2'    => 'REPROVADO',
	'3'    => 'EM ANDAMENTO',
	'4'    => 'CORREÇÃO'
	);
echo inputList("statusJucesp","Status Jucesp",$options, $statusJucesp);

echo DataPicker("remessaAlvaraBombeiro","Remessa AlvaraBombeiro",$remessaAlvaraBombeiro);
echo form_error("remessaAlvaraBombeiro");
echo DataPicker("retornoAlvaraBombeiro","Retorno AlvaraBombeiro",$retornoAlvaraBombeiro);
echo form_error("retornoAlvaraBombeiro");

$options = array(
	'1'  => 'APROVADO',
	'2'    => 'REPROVADO',
	'3'    => 'EM ANDAMENTO',
	'4'    => 'CORREÇÃO'
	);
echo inputList("statusAlvaraBombeiro","Status Alvará Bombeiro",$options, $statusAlvaraBombeiro);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();


?>
