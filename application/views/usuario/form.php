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
	echo form_label("Nome","nome");
	echo form_input(array("name"=>"nome","class"=>"form-control","id"=>"nome" ,"value"=>$nome,  "maxlength"=>"255"));
	echo form_label("Login","login");
	echo form_input(array("name"=>"login","class"=>"form-control","id"=>"login" , "value"=>$login, "maxlength"=>"255"));
	echo form_label("Senha","senha");
	echo form_input(array("name"=>"senha","class"=>"form-control","id"=>"senha" , "value"=>$senha, "maxlength"=>"255", "type"=>"password"));
		echo form_label("Confirme a senha","consenha");
	echo form_input(array("name"=>"consenha","class"=>"form-control","id"=>"consenha" , "value"=>$senha, "maxlength"=>"255", "type"=>"password"));
	echo form_label("Email","email");
	echo form_input(array("name"=>"email","class"=>"form-control","id"=>"email" ,"value"=>$email, "maxlength"=>"255"));
	
$options = array(
                  '1'  => 'Operacional',
                  '2'    => 'Gestor',
                  '3'   => 'Cliente',
             
                );

	echo form_label("Tipo","tipo");
echo form_dropdown("tipo", $options,$tipo,'class="form-control" id="tipo"');

echo form_hidden('idUsuario', $idUsuario);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Login","type"=>"submit"));
	echo form_close();



	?>