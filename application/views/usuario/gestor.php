<?php 
if ($gestorSl){
	foreach ($gestorSl as $gestorS ) {
		$idGestorSetor=$gestorS['idGestorSetor'];
		$Usuario_idUsuario=$gestorS['Usuario_idUsuario'];
		$Setor_idSetor=$gestorS['Setor_idSetor'];
	}
}
else{
	$idGestorSetor=null;
	$Usuario_idUsuario='';
	$Setor_idSetor='';
}
?>
<?php
foreach($usuarios as $usuario){
	if($usuario['idUsuario'] == $id){?>
		<h1><?php echo $usuario['nome'] ?> </h1>
	<?php }
}
?>


<?php 
echo form_open("usuarios/cadGestor");





$options = array();
foreach ($setores as $setor) {$options[$setor['idSetor']]=$setor['descricao'];}
echo inputList("Setor_idSetor","Setor",$options,$Setor_idSetor);


echo form_hidden('Usuario_idUsuario',$id);
echo form_hidden('idGestorSetor',$idGestorSetor);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();

?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Usuario</th>
			
			<th>Setor</th>

			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($gestorSetorUsuario as $setorUsuario): 
			?>

		<tr>
			<td><?php  echo $setorUsuario['nome']  ?> </td>
			<td><?php  echo $setorUsuario['setorDescricao']  ?> </td>
			

			<td><?php echo anchor("usuarios/gestor/{$setorUsuario['Usuario_idUsuario']}/{$setorUsuario['idGestorSetor']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("usuarios/excluirGestor/{$setorUsuario['idGestorSetor']}/{$setorUsuario['Usuario_idUsuario']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>


