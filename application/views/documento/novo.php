<?php

$empresa=array();

foreach ($empresas as $e) {
 $empresa[$e['idEmpresa']]=$e['razaoSocial'];
}
$usuario=array();
foreach ($usuarios as $u) {
 $usuario[$u['idUsuario']]=$u['nome'];
}

$tipo=array();
foreach ($tipodocumentos as $d) {
 $tipo[$d['idTipoDocumento']]=$d['descricao'];
}

	echo form_open("documento/salvarDoc");
	// echo form_hidden('Documento_idDocumento', $idDocumento);
	echo inputList("Empresa_idEmpresa","Empresa",$empresa);
	echo inputList("Usuario_idUsuario","Destinátario",$usuario);
	echo inputList("TipoDocumento_idTipoDocumento","Tipo Documento",$tipo);
	// echo inputTextArea("descricao","Descrição");
	echo "<br><h5>Clique em Salvar para Colocar uma Descrição</h5><br>";
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();