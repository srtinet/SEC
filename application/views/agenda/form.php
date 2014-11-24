<?php
if($agendas){
	foreach($agendas as $agenda){
		$idAgenda = $agenda['idAgenda'];
		$nome = $agenda['Nome'];
		$telefone= $agenda['Telefone'];
	}
}else{
	$idAgenda = "";
	$nome = "";
	$telefone= "";
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Cadastro da Agenda</h3>
	</div>
	<div class="col-lg-4">
	<br/>
		<?php echo anchor("agenda/listar/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
echo form_open("agenda/cadastrar");
echo form_hidden('idAgenda', $idAgenda);
echo inputText("nome","Nome",$nome);
echo inputText("telefone","Telefone",$telefone);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();