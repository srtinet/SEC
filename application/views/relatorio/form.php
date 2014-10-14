<div class="row">
	<div class="col-lg-8">
		<h1>Relatorio</h1>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
// echo '<div class="row">';
echo '<div class="col-lg-12">';
echo anchor("relatorio/planilha","Gerar Planilha Excel", array("class" => "btn btn-success"));
echo '</div>';
echo '<br/><br/><br/>';
// echo '</div>';
echo form_open("relatorio/fazRelatorio");

$options = array(
	'0'  => 'Todas',
	'1'  => 'Ativa',
	'2'  => 'Inativo',
	);
echo inputList("statusEmpresaRelatorio","Status da Empresa ",$options);

echo form_button(array("class"=>"btn btn-primary","content"=>"Gerar Relatório","type"=>"submit"));
echo form_close();
