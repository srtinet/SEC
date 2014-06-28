<?php
	if($socios){
		foreach($socios as $socio){
			$idSocio = $socio['idSocio'];
			$nome = $socio['nome'];
			$idSocio = $socio['idSocio'];
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
			$nome = '';
			$idSocio = '';
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

		echo inputText("nome","Nome",$nome);
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
		echo inputText("valorRemuneracao","NValor remuneração",$valorRemuneracao);

		echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
		echo form_close();