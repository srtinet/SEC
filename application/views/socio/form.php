<?php
if($socios){
	foreach($socios as $socio){
		$idSocio = $socio['idSocio'];
		$Empresa_idEmpresa = $socio['Empresa_idEmpresa'];
		$nome = $socio['nome'];
		$idSocio = $socio['idSocio'];
		$estadoCivil = $socio['estadoCivil'];
		$cpf = $socio['cpf'];
		$rg = $socio['rg'];
		$tituloEleitor = $socio['tituloEleitor'];
		$orgaoEmissorRg = $socio['orgaoEmissorRg'];
		$dataExpedicao = $socio['dataExpedicao'];
		$dataNascimento = $socio['dataNascimento'];
		switch($socio['uf']){
			case 1:
			$socio['uf'] = 'AC';
			case 2:
			$socio['uf'] = 'AL';
			break;
			case 3:
			$socio['uf'] = 'AP';
			break;
			case 4:
			$socio['uf'] = 'AM';
			break;
			case 5:
			$socio['uf'] = 'BA';
			break;
			case 6:
			$socio['uf'] = 'CE';
			break;
			case 7:
			$socio['uf'] = 'DF';
			break;
			case 8:
			$socio['uf'] = 'ES';
			break;
			case 9:
			$socio['uf'] = 'GO';
			break;
			case 10:
			$socio['uf'] = 'MA';
			break;
			case 11:
			$socio['uf'] = 'MT';
			break;
			case 12:
			$socio['uf'] = 'MS';
			break;
			case 13:
			$socio['uf'] = 'MG';
			break;
			case 14:
			$socio['uf'] = 'PB';
			break;
			case 15:
			$socio['uf'] = 'PR';
			break;
			case 16:
			$socio['uf'] = 'PI';
			break;
			case 17:
			$socio['uf'] = 'RJ';
			break;
			case 18:
			$socio['uf'] = 'RN';
			break;
			case 19:
			$socio['uf'] = 'RS';
			break;
			case 20:
			$socio['uf'] = 'RO';
			break;
			case 21:
			$socio['uf'] = 'RR';
			break;
			case 22:
			$socio['uf'] = 'SC';
			break;
			case 23:
			$socio['uf'] = 'SP';
			break;
			case 24:
			$socio['uf'] = 'SE';
			break;
			case 25:
			$socio['uf'] = 'TO';
			break;
		}
		$uf = $socio['uf'];
		$naturalidade = $socio['naturalidade'];
		$logradouro = $socio['logradouro'];
		$numero = $socio['numero'];
		$bairro = $socio['bairro'];
		$numero = $socio['numero'];
		$municipio = $socio['municipio'];
		$complemento = $socio['complemento'];
		$cep = $socio['cep'];
		$numero = $socio['numero'];
		$nReciboIr = $socio['nReciboIr'];
		$capitalSocial = $socio['capitalSocial'];
		$tipoParticipacao = $socio['tipoParticipacao'];
		$porcentagemSocio = $socio['porcentagemSocio'];
		$capitalSocioalDoSocio = $socio['capitalSocioalDoSocio'];
		$inicioContribuicao = $socio['inicioContribuicao'];
		$proLabore = $socio['proLabore'];
		$valorProLabore = $socio['valorProLabore'];
		$aposentado = $socio['aposentado'];
		$dataAposentadoriaIdade = $socio['dataAposentadoriaIdade'];
		$dataAposentadoriaContribuicao = $socio['dataAposentadoriaContribuicao'];
		$dependente = $socio['dependente'];
		$nomeDependente = $socio['nomeDependente'];
		$dataNascimentoDependente = $socio['dataNascimentoDependente'];
		$empregadaDomestica = $socio['empregadaDomestica'];
		$rotinaTrabalhista = $socio['rotinaTrabalhista'];
		$nomeEmpregadaDomestica = $socio['nomeEmpregadaDomestica'];
		$cpfDomestica = $socio['cpfDomestica'];
		$nitDomestica = $socio['nitDomestica'];
		$obrigadoImpostoRenda = $socio['obrigadoImpostoRenda'];
		$declaracaoEscritorio = $socio['declaracaoEscritorio'];
		$titularOutraEmpresa = $socio['titularOutraEmpresa'];
		$nomeOutraEmpresa = $socio['nomeOutraEmpresa'];
		$clienteEscritorio = $socio['clienteEscritorio'];
		$empregadoAutonomo = $socio['empregadoAutonomo'];
		$nomeAtividadeAutonomo = $socio['nomeAtividadeAutonomo'];
		$valorRemuneracao = $socio['valorRemuneracao'];
	}
}else{
	$idSocio = '';
	$Empresa_idEmpresa = $idEmpresa;
	$nome = '';
	$idSocio = '';
	$estadoCivil = '';
	$cpf = '';
	$rg = '';
	$tituloEleitor = '';
	$orgaoEmissorRg = '';
	$dataExpedicao = '';
	$dataNascimento = '';
	$uf = '';
	$naturalidade = '';
	$logradouro = '';
	$numero = '';
	$bairro = '';
	$numero = '';
	$municipio = '';
	$complemento = '';
	$cep = '';
	$numero = '';
	$nReciboIr = '';
	$capitalSocial = '';
	$tipoParticipacao = '';
	$porcentagemSocio = '';
	$capitalSocioalDoSocio = '';
	$inicioContribuicao = '';
	$proLabore = '';
	$valorProLabore = '';
	$aposentado = '';
	$dataAposentadoriaIdade = '';
	$dataAposentadoriaContribuicao = '';
	$dependente = '';
	$nomeDependente = '';
	$dataNascimentoDependente = '';
	$empregadaDomestica = '';
	$rotinaTrabalhista = '';
	$nomeEmpregadaDomestica = '';
	$cpfDomestica = '';
	$nitDomestica = '';
	$obrigadoImpostoRenda = '';
	$declaracaoEscritorio = '';
	$titularOutraEmpresa = '';
	$nomeOutraEmpresa = '';
	$clienteEscritorio = '';
	$empregadoAutonomo = '';
	$nomeAtividadeAutonomo = '';
	$valorRemuneracao = '';
}


?>
<h3>Abertura de Sócio</h3>
<?php
echo form_open("socio/cadastrar");
echo form_hidden('idSocio', $idSocio);
echo form_hidden('idEmpresa', $Empresa_idEmpresa);

echo inputText("nome","Nome",$nome);
echo form_error("nome");
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Solteiro',
	'2'  => 'Casado',
	'3'  => 'Divorciado',
	'4' => 'Viúvo'
	);
echo inputList("estadoCivil","Estado Civil",$options, $estadoCivil);
echo form_error("estadoCivil");
echo inputText("cpf","CPF",$cpf);
echo form_error("cpf");
echo inputText("tituloEleitor","Título Eleitor",$tituloEleitor);
echo form_error("tituloEleitor");
echo inputText("rg","RG",$rg);
echo form_error("rg");
echo inputText("orgaoEmissorRg","Orgão Emissor Rg",$orgaoEmissorRg);
echo form_error("orgaoEmissorRg");
echo DataPicker("dataExpedicao","Data Expedição",$dataExpedicao);
echo form_error("dataExpedicao");
echo DataPicker("dataNascimento","Data Nascimento",$dataNascimento);
echo form_error("dataNascimento");
echo inputText("naturalidade","Naturalidade",$naturalidade);
echo form_error("naturalidade");
echo inputTextCep("cep","CEP",$cep);
echo form_error("cep");
echo inputText("logradouro","Logradouro",$logradouro);
echo form_error("logradouro");
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
echo inputText("nReciboIr","Número Recibo IR",$nReciboIr);
echo form_error("nReciboIr");
echo inputText("capitalSocial","Capital Social",$capitalSocial);
echo form_error("capitalSocial");
echo inputText("tipoParticipacao","Tipo Participação",$tipoParticipacao);
echo form_error("tipoParticipacao");
echo inputText("porcentagemSocio","Porcentagem Sócio",$porcentagemSocio);
echo form_error("porcentagemSocio");
echo inputText("capitalSocioalDoSocio","Capital Social Do Sócio",$capitalSocioalDoSocio);
echo form_error("capitalSocioalDoSocio");
echo DataPicker("inicioContribuicao","Início Contribuição INSS",$inicioContribuicao);
echo form_error("inicioContribuicao");

echo '<h1>Pró-Labore</h1>';

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("proLabore","Pró-Labore",$options, $proLabore, "proLabore", "caixaLista");
echo '<div id="caixaLista">';
echo inputText("valorProLabore","Valor Pró-Labore",$valorProLabore);
echo form_error("valorProLabore");
echo '</div>';

echo '<h1>Aposentado</h1>';

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("aposentado","Aposentado",$options, $aposentado, "aposentado", "caixaLista2");
echo '<div id="caixaLista2">';
echo DataPicker("dataAposentadoriaIdade","Data Aposentadoria por Idade",$dataAposentadoriaIdade);
echo form_error("dataAposentadoriaIdade");
echo DataPicker("dataAposentadoriaContribuicao","Data Aposentadoria por Contribuição",$dataAposentadoriaContribuicao);
echo form_error("dataAposentadoriaContribuicao");
echo '</div>';

echo '<h1>Dependentes</h1>';

$options = array(
	'0'  => 'Selecione',
	'1' => 'Sim',
	'2' => 'Não'
	);


echo inputListSumir("dependente","Possui Dependentes",$options, $dependente, "dependente", "caixaLista3");

echo '<div id="caixaLista3">';

echo inputText("nomeDependente","Nome Dependente",$nomeDependente);
echo form_error("nomeDependente");
echo DataPicker("dataNascimentoDependente","Data Nascimento Dependente",$dataNascimentoDependente);
echo form_error("dataNascimentoDependente");

echo '</div>';

//////////////////////////////////////////////////


echo '<h1>Empregada Doméstica</h1>';

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("empregadaDomestica","Possui Empregada Domestica?",$options, $empregadaDomestica, "empregadaDomestica", "caixaLista4");


echo '<div id="caixaLista4">';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputList("rotinaTrabalhista","Deseja que o escritório faça o serviço de registro e demais rotinas trabalhistas?",$options, $rotinaTrabalhista);

echo inputText("nomeEmpregadaDomestica","Nome Empregada Doméstica",$nomeEmpregadaDomestica);
echo form_error("nomeEmpregadaDomestica");

echo inputText("cpfDomestica","CPF da Empregada Doméstica",$cpfDomestica);
echo form_error("cpfDomestica");
echo inputText("nitDomestica","NIT da Empregada Doméstica",$nitDomestica);
echo form_error("nitDomestica");
echo '</div>';

//////////////////////////////////////////////////

echo '<h1>Imposto Renda</h1>';

$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("obrigadoImpostoRenda","Obrigado a declarar Imposto de Renda?",$options, $obrigadoImpostoRenda, "obrigadoImpostoRenda", "caixaLista5");
echo '<div id="caixaLista5">';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputList("declaracaoEscritorio","Deseja fazer a Declaração no escritório?",$options, $declaracaoEscritorio);
echo '</div>';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo '<h1>Outra Empresa</h1>';

echo inputListSumir("titularOutraEmpresa","É sócio ou titular de outra empresa?",$options, $titularOutraEmpresa, "titularOutraEmpresa", "caixaLista6");
echo '<div id="caixaLista6">';
echo inputText("nomeOutraEmpresa","Nome Outra Empresa",$nomeOutraEmpresa);
echo form_error("nomeOutraEmpresa");
echo '</div>';

echo '<h1>Cliente em Outro Escritório</h1>';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputList("clienteEscritorio","É cliente em outro escritório?",$options, $clienteEscritorio);

echo '<h1>Empregado Autônomo</h1>';
$options = array(
	'0'  => 'Selecione',
	'1'  => 'Sim',
	'2'  => 'Não'
	);
echo inputListSumir("empregadoAutonomo","Exerce outra ativida como empregado ou autônomo?",$options, $empregadoAutonomo, "empregadoAutonomo", "caixaLista7");

echo '<div id="caixaLista7">';

echo inputText("nomeAtividadeAutonomo","Nome atividade autônomo",$nomeAtividadeAutonomo);
echo form_error("nomeAtividadeAutonomo");
echo inputText("valorRemuneracao","Valor remuneração",$valorRemuneracao);
echo form_error("valorRemuneracao");
echo '</div>';


echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();