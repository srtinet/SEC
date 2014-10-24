<?php 


if ($responsaveis){
	foreach ($responsaveis as $responsavel ) {
		$idSetorUsuario=$responsavel['idSetorUsuario'];
		$Usuario_idUsuario=$responsavel['Usuario_idUsuario'];
		$Setor_idSetor=$responsavel['Setor_idSetor'];
		
		
	}
}
else{
	$idSetorUsuario=null;
	$Usuario_idUsuario='';
	$Setor_idSetor='';



}

foreach ($empresas as $empresa) {}
	?>
<h1><?php echo $empresa['razaoSocial'] ?> </h1>

<?php 
echo form_open("empresa/cadResponsavel");




$options = array();
foreach ($usuarios as $usuario) {$options[$usuario['idUsuario']]=$usuario['nome'];}
echo inputList("Usuario_idUsuario","Usuario",$options,$Usuario_idUsuario);

$options = array();
foreach ($setores as $setor) {$options[$setor['idSetor']]=$setor['descricao'];}
echo inputList("Setor_idSetor","Setor",$options,$Setor_idSetor);


echo form_hidden('Empresa_idEmpresa',$empresa['idEmpresa']);
echo form_hidden('idSetorUsuario',$idSetorUsuario);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();

?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Reponsavel</th>
			
			<th>Setor</th>
		
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($setorUsuarioEmpresa as $setorUsuario): 
			?>

		<tr>
			<td><?php  echo $setorUsuario['nome']  ?> </td>
			<td><?php  echo $setorUsuario['setorDescricao']  ?> </td>
			<td><?php echo anchor("empresa/responsaveis/{$setorUsuario['Empresa_idEmpresa']}/{$setorUsuario['idSetorUsuario']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("empresa/excluirResponsaveis/{$setorUsuario['idSetorUsuario']}/{$setorUsuario['Empresa_idEmpresa']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>


