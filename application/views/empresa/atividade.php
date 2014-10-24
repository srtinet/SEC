<?php 


if ($AtividadeSelecionada){
	foreach ($AtividadeSelecionada as $atividadeSl ) {
		$idAtividadeEmpresa=$atividadeSl['idAtividadeEmpresa'];
		$Atividade_idAtividade=$atividadeSl['Atividade_idAtividade'];
		$Setor_idSetor=$atividadeSl['Setor_idSetor'];
		$dataControle=dataMysqlParaPtBr($atividadeSl['dataControle']);
			$tipo=$atividadeSl['tipo'];
	}
}
else{
	$idAtividadeEmpresa=null;
	$Atividade_idAtividade='';
	$Setor_idSetor='';
	$dataControle='';
	$tipo='';


}

foreach ($empresas as $empresa) {}
	?>
<h1><?php echo $empresa['razaoSocial'] ?> </h1>

<?php 
echo form_open("empresa/cadAtividade");




$options = array();
foreach ($atividades as $atividade) {$options[$atividade['idAtividade']]=$atividade['descricao'];}
echo inputList("Atividade_idAtividade","Atividade",$options,$Atividade_idAtividade);

$options = array();
foreach ($setores as $setor) {$options[$setor['idSetor']]=$setor['descricao'];}
echo inputList("Setor_idSetor","Setor",$options,$Setor_idSetor);

$options = array(
	'0'=>'Quinzenal',
'1'=>'Mensal',
'2'=>'Bimestral',
'3'=>'Trimestral',
'4'=>'Semestral',
'5'=>'Anual'
	);

echo inputList("tipo","Tipo",$options,$tipo);

echo DataPicker('dataControle','Data Inicial',$dataControle);
echo form_hidden('Empresa_idEmpresa',$empresa['idEmpresa']);
echo form_hidden('idAtividadeEmpresa',$idAtividadeEmpresa);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();

?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Atividade</th>
			
			<th>Setor</th>
			<th>Data Controle</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($empresaAtividades as $empresaAtividade): 
			?>

		<tr>
			<td><?php  echo $empresaAtividade['atividadeDescricao']  ?> </td>
			<td><?php  echo $empresaAtividade['setorDescricao']  ?> </td>
			<td><?php  echo dataMysqlParaPtBr($empresaAtividade['dataControle'])  ?> </td>

			<td><?php echo anchor("empresa/Atividade/{$empresaAtividade['Empresa_idEmpresa']}/{$empresaAtividade['idAtividadeEmpresa']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("empresa/excluirAtividade/{$empresaAtividade['idAtividadeEmpresa']}/{$empresaAtividade['Empresa_idEmpresa']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>


