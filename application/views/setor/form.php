<div class="row">
	<div class="col-lg-8">
		<!-- <h3>Setor</h3> -->
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("setor/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
<?php

if($setor){
	foreach($setor as $s){
		$descricao = $s['descricao'];
		$idSetor = $s['idSetor'];
	}
}else{
	$descricao = '';
	$idSetor = '';
}
?>
<h1>Setor</h1>
<?php
	echo form_open("setor/cadastrar");
	echo inputText("descricao","Descrição",$descricao);
	echo form_error("descricao");
	echo form_hidden('idSetor', $idSetor);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();