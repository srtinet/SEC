<?php

echo form_open("ligacao/cadastrar");

$options = array();
foreach($empresa as $e) {
	$options[$e["idEmpresa"]] = $e["razaoSocial"];

}
echo inputList("Empresa_idEmpresa","Empresa",$options);


echo inputTextArea("observacao", "Observação");

$idUsuario = $this->session->userdata("usuario_logado");
$estado = 0;
echo form_hidden('Usuario_idUsuario', $idUsuario['idUsuario']);
echo form_hidden('estado', $estado);
echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();