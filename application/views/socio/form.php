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
		echo inputText("estadoCivil","Estado Civil",$estadoCivil);
		echo form_error("estadoCivil");
		echo inputText("cpf","CPF",$cpf);
		echo form_error("cpf");
		echo inputText("tituloEleitor","Título Eleitor",$tituloEleitor);
		echo form_error("tituloEleitor");
		echo inputText("rg","RG",$rg);
		echo form_error("rg");
		echo inputText("orgaoEmissorRg","Orgão Emissor Rg",$orgaoEmissorRg);
		echo form_error("orgaoEmissorRg");
		echo inputText("dataExpedicao","Data Expedição",$dataExpedicao);
		echo form_error("dataExpedicao");
		echo inputText("dataNascimento","Data Nascimento",$dataNascimento);
		echo form_error("dataNascimento");
		echo inputText("uf","UF",$uf);
		echo form_error("uf");
		echo inputText("naturalidade","Naturalidade",$naturalidade);
		echo form_error("naturalidade");
		echo inputText("tipoLogradouro","Tipo Logradouro",$tipoLogradouro);
		echo form_error("tipoLogradouro");
		echo inputText("logradouro","Logradouro",$logradouro);
		echo form_error("logradouro");
		echo inputText("numero","Número",$numero);
		echo form_error("numero");
		echo inputText("bairro","Bairro",$bairro);
		echo form_error("bairro");
		echo inputText("municipio","Municipio",$municipio);
		echo form_error("municipio");
		echo inputText("complemento","Complemento",$complemento);
		echo form_error("complemento");
		echo inputText("cep","CEP",$cep);
		echo form_error("cep");
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

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("proLabore","Pró-Labore",$options, $proLabore);

		echo inputText("valorProLabore","Valor Pró-Labore",$valorProLabore);
		echo form_error("valorProLabore");

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("aposentado","Aposentado",$options, $aposentado);

		echo DataPicker("dataAposentadoriaIdade","Data Aposentadoria por Idade",$dataAposentadoriaIdade);
		echo form_error("dataAposentadoriaIdade");
		echo DataPicker("dataAposentadoriaContribuicao","Data Aposentadoria por Contribuição",$dataAposentadoriaContribuicao);
		echo form_error("dataAposentadoriaContribuicao");

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("dependente","Dependentes",$options, $dependente);

		echo inputText("nomeDependente","Nome Dependente",$nomeDependente);
		echo form_error("nomeDependente");
		echo DataPicker("dataNascimentoDependente","Data Nascimento Dependente",$dataNascimentoDependente);
		echo form_error("dataNascimentoDependente");

		$options = array(
			'1'  => 'Sim',
			'2'  => 'Não'
		);
		echo inputList("empregadaDomestica","Possui Empregada Domestica?",$options, $empregadaDomestica);

		$options = array(
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
		echo form_error("nomeOutraEmpresa");

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
		echo form_error("nomeAtividadeAutonomo");
		echo inputText("valorRemuneracao","Valor remuneração",$valorRemuneracao);
		echo form_error("valorRemuneracao");

		echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
		echo form_close();