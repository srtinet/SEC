<?php $usuario=$this->session->userdata('usuario_logado'); ?>

<div class="col-md-2 col-lg-2">
	<ul class="nav nav-pills nav-stacked menu-lat">
	<?php
      if($usuario['tipo'] != 3){
	?>
		<li ><?php echo anchor("/", "Home" ); ?></li>
		<li ><?php echo anchor("ligacao/form", "Solicitar Ligação" ); ?></li>
		<li ><?php echo anchor("recado/form", "Enviar Recado" ); ?></li>
		<li ><?php echo anchor("documento/novo", "Enviar documento" ); ?></li>
		<li ><?php echo anchor("relatorio", "Relatório" ); ?></li>
	<?php } ?>
	</ul>
</div>
