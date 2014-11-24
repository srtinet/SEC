
<h1>Comentários Documento</h1>
<?php
$i = 0;
if($comentarios){
	echo '<div class="row">';
	foreach($comentarios as $comentario){
	// echo "<div>";
		$i++;
		
		echo '<div class="caixaComentario col-lg-3">';
		echo "<h2>Descrição ".$i.": </h2><h3>".character_limiter($comentario["nome"], 15)."</h3>";
		echo "<p>".$comentario['comentario']."</p>";
		echo "</div>";
	}	
	echo "</div>";
}
?>
<?php

echo form_open("documento/cadastrarDescricao");
echo form_hidden("Documento_idDocumento", $idDocumento);
echo form_hidden("Usuario_idUsuario", $usuario);
echo inputTextArea("comentario","Nova Descrição");
echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();