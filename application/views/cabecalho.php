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
		<header class="jumbotron header">
			<h2><img src="<?php echo base_url("img/logo.png") ?>" width="140"/> - Sistema de Escritorio Contabil</h2>
		<div class="login-box">
			<?php
				$usuario = $this->session->userdata['usuario_logado']['nome'];
				echo '<p class="login">Seja bem-vindo '.$usuario.'</p>';
				echo anchor('login/logout', 'Logout', array("class" => "btn btn-danger"));
			?>
		</div>
		</header>
		<div class="container">
		<div class="row">

