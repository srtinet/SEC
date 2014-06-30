<?php
	if($socios){
		foreach($socios as $socio){
			$idSocio = $socio['idSocio'];
			$Empresa_idEmpresa = $socio['Empresa_idEmpresa'];
			$nome = $socio['nome'];
			$idSocio = $socio['idSocio'];
			$estadoCivil = $socio['estadoCivil'];
			$rg = $socio['rg'];
			$tituloEleitor = $socio['tituloEleitor'];
			$orgaoEmissorRg = $socio['orgaoEmissorRg'];
			$dataExpedicao = $socio['dataExpedicao'];
			$dataNascimento = $socio['dataNascimento'];
			$uf = $socio['uf'];
			$naturalidade = $socio['naturalidade'];
			$tipoLogradouro = $socio['tipoLogradouro'];
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
			$capitalSocioDoSocio = $socio['capitalSocioDoSocio'];
			$inicioContribuicao = $socio['inicioContribuicao'];
			$proLabore = $socio['proLabore'];
			$valorProLabore = $socio['valorProLabore'];
			$aposentado = $socio['aposentado'];
			$dataAposentadoriaIdade = $socio['dataAposentadoriaIdade'];
			$dataAposentadoriaContribuicao = $socio['dataAposentadoriaContribuicao'];
			$dependente = $socio['dependente'];
			$nomeDependente = $socio['nomeDependente'];
			$dataNascimentoDependente = $socio['dataNascimentoDependente'];
			$empregada = $socio['empregada'];
			$rotinaTrabalhista = $socio['rotinaTrabalhista'];
			$nomeEmpregada = $socio['nomeEmpregada'];
			$cpf = $socio['cpf'];
			$nit = $socio['nit'];
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
			$rg = '';
			$tituloEleitor = '';
			$orgaoEmissorRg = '';
			$dataExpedicao = '';
			$dataNascimento = '';
			$uf = '';
			$naturalidade = '';
			$tipoLogradouro = '';
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
			$capitalSocioDoSocio = '';
			$inicioContribuicao = '';
			$proLabore = '';
			$valorProLabore = '';
			$aposentado = '';
			$dataAposentadoriaIdade = '';
			$dataAposentadoriaContribuicao = '';
			$dependente = '';
			$nomeDependente = '';
			$dataNascimentoDependente = '';
			$empregada = '';
			$rotinaTrabalhista = '';
			$nomeEmpregada = '';
			$cpf = '';
			$nit = '';
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
		echo inputText("estadoCivil","Estado Civil",$estadoCivil);
		echo inputText("rg","RG",$rg);
		echo inputText("tituloEleitor","Título Eleitor",$tituloEleitor);
		echo inputText("orgaoEmissorRg","Orgão Emissor Rg",$orgaoEmissorRg);
		echo inputText("dataExpedicao","Data Expedição",$dataExpedicao);
		echo inputText("dataNascimento","Data Nascimento",$dataNascimento);
		echo inputText("uf","UF",$uf);
		echo inputText("naturalidade","Naturalidade",$naturalidade);
		echo inputText("tipoLogradouro","Tipo Logradouro",$tipoLogradouro);
		echo inputText("logradouro","Logradouro",$logradouro);
		echo inputText("numero","Número",$numero);
		echo inputText("bairro","Bairro",$bairro);
		echo inputText("municipio","Municipio",$municipio);
		echo inputText("complemento","Complemento",$complemento);
		echo inputText("cep","CEP",$cep);
		echo inputText("nReciboIr","Número Recibo IR",$nReciboIr);
		echo inputText("capitalSocial","Capital Social",$capitalSocial);
		echo inputText("tipoParticipacao","Tipo Participação",$tipoParticipacao);
		echo inputText("porcentagemSocio","Porcentagem Sócio",$porcentagemSocio);
		echo inputText("capitalSocioDoSocio","Capital Sócio Do Sócio",$capitalSocioDoSocio);
		echo DataPicker("inicioContribuicao","Início Contribuição",$inicioContribuicao);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("proLabore","Pró-Labore",$options, $proLabore);

		echo inputText("valorProLabore","Valor Pró-Labore",$valorProLabore);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("aposentado","Aposentado",$options, $aposentado);

		echo DataPicker("dataAposentadoriaIdade","Data Aposentadoria por Idade",$dataAposentadoriaIdade);
		echo DataPicker("dataAposentadoriaContribuicao","Data Aposentadoria por Contribuição",$dataAposentadoriaContribuicao);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("dependente","Dependentes",$options, $dependente);

		echo inputText("nomeDependente","Nome Dependente",$nomeDependente);
		echo DataPicker("dataNascimentoDependente","Data Nascimento Dependente",$dataNascimentoDependente);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("empregada","Possui Empregada?",$options, $empregada);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("rotinaTrabalhista","Deseja que o escritório faça o serviço de registro e demais rotinas trabalhistas?",$options, $rotinaTrabalhista);

		echo inputText("nomeEmpregada","Nome Empregada",$nomeEmpregada);
		echo inputText("cpf","CPF",$cpf);
		echo inputText("nit","NIT",$nit);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("obrigadoImpostoRenda","Obrigado a declarar Imposto de Renda?",$options, $obrigadoImpostoRenda);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("declaracaoEscritorio","Deseja fazer a Declaração no escritório?",$options, $declaracaoEscritorio);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("titularOutraEmpresa","É sócio ou titular de outra empresa?",$options, $titularOutraEmpresa);

		echo inputText("nomeOutraEmpresa","Nome Outra Empresa",$nomeOutraEmpresa);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("clienteEscritorio","É cliente em outro escritório?",$options, $clienteEscritorio);

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("empregadoAutonomo","Exerce outra ativida como empregado ou autônomo?",$options, $empregadoAutonomo);

		echo inputText("nomeAtividadeAutonomo","Nome atividade autônomo",$nomeAtividadeAutonomo);
		echo inputText("valorRemuneracao","Valor remuneração",$valorRemuneracao);

		echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
		echo form_close();