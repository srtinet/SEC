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


<<<<<<< HEAD
}
=======
	}
		function tiraDia($data,$quantidadeDia){


	$data = explode('-',$data);
		$nova_data = mktime(0, 0, 0, $data[1] , ($data[2]-$quantidadeDia), $data[0]);
  return strftime("%Y-%m-%d", $nova_data);


	}
>>>>>>> 5a23924a4e85c04441eb9d4abe090d87680222b3
