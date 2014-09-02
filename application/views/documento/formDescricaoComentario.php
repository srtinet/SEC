<?php

?>
<h1>Comentários Documento</h1>

<?php
	echo form_open("documento/cadastrarDescricao");
	echo form_hidden('Documento_idTipoDocumento', $idDocumento);
	echo form_hidden('Usuario_idUsuario', $usuario);
	echo inputText("comentario","Comentário",$comentario);
	
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();