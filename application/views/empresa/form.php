<?php

if($empresas){
	foreach($empresas as $empresa){
		$razaoSocial = $empresa['razaoSocial'];
		$idEmpresa = $empresa['idEmpresa'];
	}
}else{
	$razaoSocial = '';
	$idEmpresa = '';
}

	echo form_open("empresa/cadastrar");
	echo inputText("razaoSocial","Razão Social",$razaoSocial);
	echo form_hidden('idEmpresa', $idEmpresa);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();