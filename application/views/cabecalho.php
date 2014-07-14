<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SEC</title>
	<meta charset="UTF-8">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/dataTables.bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/datepicker.css") ?>" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/bootstrap-datetimepicker.min.css") ?>" media="screen">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/estilo.css") ?>" media="screen">
</head>
<body>
	<header class="header">
		<div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
			<img class="img-responsive"src="<?php echo base_url("img/logo.png") ?>"/>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-7 col-xs-7">
			<h2> - Sistema de Escritório Contábil</h2>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 login-box">
			<?php
			if(isset($this->session->userdata['usuario_logado'])){
				$usuario = $this->session->userdata['usuario_logado']['login'];
				echo '<p class="login">Seja bem-vindo '.$usuario.'</p>';
				echo anchor('login/logout', 'Logout', array("class" => "btn btn-danger"));
			}
			?>
		</div></div>
	</header>
	
