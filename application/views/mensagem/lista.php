<h1>Mensagens</h1>
</br>
</br>
<?php
$usuarioLogado = $this->session->userdata['usuario_logado']['idUsuario'];
foreach($mensagens as $mensagem) :
	if($usuarioLogado == $mensagem['idRemetente']){ ?>
<div class="alert alert-info" role="alert">
	<?php echo $mensagem['nomeRemetente']." : ". $mensagem['recado']?>
</div>
<?php } else if($usuarioLogado != $mensagem['idDestinatario']) { ?>
<div class="alert alert-warning" role="alert">
	<?php echo $mensagem['nomeRemetente']." : ".$mensagem['recado']?>
</div>
<?php }
else if($usuarioLogado == $mensagem['idDestinatario']) { ?>
<div class="alert alert-warning" role="alert">
	<?php echo $mensagem['nomeRemetente']." : ".$mensagem['recado']?>
</div>
<?php }
else if($usuarioLogado == $mensagem['idRemetente']) { ?>
<div class="alert alert-warning" role="alert">
	<?php echo $mensagem['nomeRemetente']." : ".$mensagem['recado']?>
</div>
<?php }
endforeach;

?>
<?php if($mensagem['idDestinatario'] == $usuarioLogado){
	echo anchor("mensagem/finalizarConversa/{$idRecado}", 'Finalizar Conversa', array("class" => "btn btn-primary")); ?>

	<h2>Enviar Mensagem</h2>

	<?php
	echo form_open("mensagem/cadastrarMensagem/{$idRecado}");


	$options = array();
	foreach($usuarios as $usuario) {
		$options[$usuario["idUsuario"]] = $usuario["nome"];

	}
	echo inputList("Usuario_idUsuario","Usuário",$options);
	echo inputTextArea("recado","Recado");

	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();

}?>








