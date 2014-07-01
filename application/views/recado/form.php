<h3>Abertura de Recado</h3>
<?php
	echo form_open("recado/cadastrar");
	echo form_hidden('idRecado', $idRecado);
	echo inputText("nome","Nome",$nome);
