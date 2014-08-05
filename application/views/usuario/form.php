	<?php 
	if ($usuarios){
		foreach ($usuarios as $usuario ) {
			


			$nome=$usuario['nome'];
			$login=$usuario['login'];
			$senha=$usuario['senha'];
			$senha=$usuario['senha'];
			$email=$usuario['email'];
			$tipo=$usuario['tipo'];
			$idUsuario=$usuario['idUsuario'];
			$Empresa_idEmpresa=$usuario['Empresa_idEmpresa'];

		}
	}
	else{
		$nome='';
		$login='';
		$senha='';
		$senha='';
		$email='';
		$tipo='';
		$idUsuario=null;
		$Empresa_idEmpresa='';
		
	}

	?>
	<h1>Usuários</h1>
	<?php

	echo form_open("usuarios/cadastrar");
	echo inputText("nome", "Nome", $nome);
	echo form_error("nome");
	echo inputText("login", "Login", $login);
	echo form_error("login");
	echo inputPass("senha", "Senha", $senha);
	echo form_error("senha");
	echo inputPass("consenha", "Confirme a senha", $senha);
	echo form_error("consenha");
	echo inputText("email","Email", $email);
	echo form_error("email");
	
	$options = array(
		'0'  => 'Selecione',
		'1'  => 'Operacional',
		'2'    => 'Gestor',
		'3'   => 'Cliente',
		
		);

	echo inputListSumir2("tipo","Tipo",$options, $tipo, "tipo", "caixaLista");
	echo '<div id="caixaLista">';
	$options = array();
	$options[0] = "Selecione";
	foreach($empresa as $e) {
	$options[$e["idEmpresa"]] = $e["razaoSocial"];
	}
	echo inputList("Empresa_idEmpresa","Empresa",$options, $Empresa_idEmpresa);
	echo '</div>';
	echo form_hidden('idUsuario', $idUsuario);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();



	?>