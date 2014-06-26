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
	echo form_label("Razão Social","razaoSocial");
	echo form_input(array("name"=>"razaoSocial","class"=>"form-control","id"=>"razaoSocial" , "value" => $razaoSocial,  "maxlength"=>"255"));
	echo form_hidden('idEmpresa', $idEmpresa);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();