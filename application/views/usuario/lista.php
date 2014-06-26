<h1>Usuarios</h1>
<?= anchor('usuarios/form', 'Novo', array("class" => "btn btn-primary")); ?>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Login</th>
			<th>Tipo</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($usuarios as $usuario): 
			?>

		<tr>
			<td><?php  echo $usuario['nome']  ?> </td>
			<td><?=  $usuario['login'] ?> </td>
			<td><?=  $usuario['tipo'] ?> </td>
			<td><?php echo anchor("usuarios/form/{$usuario['idUsuario']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("usuarios/excluir/{$usuario['idUsuario']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
