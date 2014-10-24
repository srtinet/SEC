<?php
function dataPtBrParaMysql($dataPtBr){
	$partes = explode("/", $dataPtBr);
	return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}
function  dataMysqlParaPtBr($dataMysql){
	$data = new DateTime($dataMysql);
	return $data->format("d/m/Y");
}


function adicionaMes($data,$quantidadeMes){
	$data = explode('-',$data);
	$nova_data = mktime(0, 0, 0, ($data[1] + $quantidadeMes), $data[2], $data[0]);
	return strftime("%Y-%m-%d", $nova_data);
}
function adicionaDia($data,$quantidadeDia){
	$data = explode('-',$data);
	$nova_data = mktime(0, 0, 0, $data[1] , ($data[2]+$quantidadeDia), $data[0]);
	return strftime("%Y-%m-%d", $nova_data);



}
function adicionaAno($data,$quantidadeDia){
	$data = explode('-',$data);
	$nova_data = mktime(0, 0, 0, $data[1] , $data[2], ($data[0]+$quantidadeDia));
	return strftime("%Y-%m-%d", $nova_data);



}

function tiraDia($data,$quantidadeDia){
	$data = explode('-',$data);
	$nova_data = mktime(0, 0, 0, $data[1] , ($data[2]-$quantidadeDia), $data[0]);
	return strftime("%Y-%m-%d", $nova_data);
}

function calc_idade( $data ){
    list($dia, $mes, $ano) = explode('/', $data);// Separa em dia, mês e ano
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));// Descobre que dia é hoje e retorna a unix timestamp
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);// Descobre a unix timestamp da data de nascimento do fulano
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);// Depois apenas fazemos o cálculo já citado :)
    return $idade;
}


