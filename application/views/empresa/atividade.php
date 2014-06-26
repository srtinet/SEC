<?php 


if ($AtividadeSelecionada){
	foreach ($AtividadeSelecionada as $atividadeSl ) {
		$idAtividadeEmpresa=$atividadeSl['idAtividadeEmpresa'];
		$Atividade_idAtividade=$atividadeSl['Atividade_idAtividade'];
		$Setor_idSetor=$atividadeSl['Setor_idSetor'];
		$dataControle=$atividadeSl['dataControle'];
		
	}
}
else{
	$idAtividadeEmpresa=null;
	$Atividade_idAtividade='';
	$Setor_idSetor='';
	$dataControle='';


}

foreach ($empresas as $empresa) {}
	?>
<h1><?php echo $empresa['razaoSocial'] ?> </h1>

<?php 
echo form_open("empresa/cadAtividade");




$options = array();
foreach ($atividades as $atividade) {$options[$atividade['idAtividade']]=$atividade['descricao'];}
echo inputList("atividade","Atividade",$options,$Atividade_idAtividade);

$options = array();
foreach ($setores as $setor) {$options[$setor['idSetor']]=$setor['descricao'];}
echo inputList("setor","Setor",$options,$Setor_idSetor);

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
			<td><?php  echo $empresaAtividade['dataControle']  ?> </td>

			<td><?php echo anchor("empresa/Atividade/{$empresaAtividade['Empresa_idEmpresa']}/{$empresaAtividade['idAtividadeEmpresa']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("empresa/excluirAtividade/{$empresaAtividade['idAtividadeEmpresa']}/{$empresaAtividade['Empresa_idEmpresa']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>


