<?php 
foreach ($empresas as $empresa) {

	
}
?>
<h1><?php echo $empresa['razaoSocial'] ?> </h1>

<?php 
	echo form_open("empresa/cadAtividade");




$options = array();

foreach ($atividades as $atividade) {
$options[$atividade['idAtividade']]=$atividade['descricao'];
	
}

echo form_label("Atividade","atividade");
echo form_dropdown("Atividade_idAtividade", $options,'','class="form-control" id="atividade"');


$options = array();

foreach ($setores as $setor) {
$options[$setor['idSetor']]=$setor['descricao'];
	
}

echo form_label("Setor","setor");
echo form_dropdown("Setor_idSetor", $options,'','class="form-control" id="setor"');
	
echo form_label("Data Inicial","dataControle");
	echo form_input(array("name"=>"dataControle","class"=>"form-control","id"=>"dataControle" , "type"=>"date", "maxlength"=>"255"));
	
	echo form_hidden('Empresa_idEmpresa',$empresa['idEmpresa']);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();

 ?>
