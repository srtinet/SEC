<?php
if($dependentes){
	foreach($dependentes as $dependente) :
		$idDependente = $dependente['idDependente'];
		$Socio_idSocio = $dependente['Socio_idSocio'];
		$nome = $dependente['nome'];
		$dataNascimento = $dependente['dataNascimento'];
	endforeach;
}else{
	$idDependente = '';
	$Socio_idSocio = $idSocio;
	$nome = '';
	$dataNascimento = '';
}
?>


<div class="row">
	<div class="col-lg-8">
		<h3>Abertura de Dependente</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("dependente/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
<?php
echo form_open("dependente/cadastrar");
echo form_hidden('idDependente', $idDependente);
echo form_hidden('idSocio', $Socio_idSocio);
echo inputText("nome","Nome",$nome);
echo DataPicker("dataNascimento","Data de Nascimento",$dataNascimento);
echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();
?>