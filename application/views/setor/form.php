<?php

if($setor){
	foreach($setor as $s){
		$descricao = $s['descricao'];
		$idSetor = $s['idSetor'];
	}
}else{
	$descricao = '';
	$idSetor = '';
}

	echo form_open("setor/cadastrar");
	echo inputText("descricao","Descrição",$descricao);
	echo form_hidden('idSetor', $idSetor);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();