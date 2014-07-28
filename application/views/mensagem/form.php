
<h3>Mensagem</h3>
<?php
echo form_open("recado/cadastrar");

$options = array();
foreach($empresas as $empresa) {
	$options[$empresa["idEmpresa"]] = $empresa["razaoSocial"];

}
echo inputList("Empresa_idEmpresa","Empresa",$options);

$options = array();
foreach($usuarios as $usuario) {
	$options[$usuario["idUsuario"]] = $usuario["nome"];

}
echo inputList("idUsuarioDestino","Usuário",$options);

echo inputTextArea("recado","Recado");

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));

echo form_close();

