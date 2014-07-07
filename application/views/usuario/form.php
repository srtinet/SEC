	<?php 
	if ($usuarios){
		foreach ($usuarios as $usuario ) {
			


			$nome=$usuario['nome'];;
			$login=$usuario['login'];;
			$senha=$usuario['senha'];;
			$senha=$usuario['senha'];;
			$email=$usuario['email'];;
			$tipo=$usuario['tipo'];;
			$idUsuario=$usuario['idUsuario'];;

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
		
	}



	echo form_open("usuarios/cadastrar");
	echo inputText("nome", "Nome", $nome);
	echo form_error("nome");
	echo inputText("login", "Login", $login);
	echo form_error("login");
	echo inputPass("senha", "Senha", $senha);
	echo form_error("senha");
	echo inputPass("consenha", "Confirme a senha", $senha);
	echo form_error("consenha");
	echo inputText("Email","email", $email);
	echo form_error("email");
	
	$options = array(
		'1'  => 'Operacional',
		'2'    => 'Gestor',
		'3'   => 'Cliente',
		
		);
	echo inputList("tipo","Tipo",$options, $tipo);
	echo form_hidden('idUsuario', $idUsuario);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Login","type"=>"submit"));
	echo form_close();



	?>