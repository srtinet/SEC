<?php

if($TipoDocumento){
	foreach($TipoDocumento as $s){
		$descricao = $s['descricao'];
		$idTipoDocumento = $s['idTipoDocumento'];
	}
}else{
	$descricao = '';
	$idTipoDocumento = '';
}
?>
<h1>Documentos</h1>

<?php
	echo form_open("documento/cadastrar");
	echo inputText("descricao","Descrição",$descricao);
	echo form_hidden('idTipoDocumento', $idTipoDocumento);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();