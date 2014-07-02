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

	echo form_open("documento/cadastrar");
	echo inputList("Empresa_idEmpresa","Empresa",$empresa);
		echo inputList("Usuario_idUsuario","Usuario",$usuario);
		echo inputList("TipoDocumento_idTipoDocumento","Tipo Documento",$tipo);
	
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();