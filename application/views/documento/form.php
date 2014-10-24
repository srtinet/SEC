<?php

if($TipoDocumento){
	foreach($TipoDocumento as $s){
		$descricao = $s['descricao'];
		$idTipoDocumento = $s['idTipoDocumento'];
	}
}else{
	$descricao = '';
	$idTipoDocumento = '';
}
?>
<div class="row">
	<div class="col-lg-8">
		<h3>Abertura de Empresa</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("documento/listarTipo/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>

<?php
	echo form_open("documento/cadastrar");
	echo inputText("descricao","Descrição",$descricao);
	echo form_hidden('idTipoDocumento', $idTipoDocumento);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();