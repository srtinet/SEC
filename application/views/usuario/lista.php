<h1>Usuarios</h1>
<?= anchor('usuarios/form', 'Novo', array("class" => "btn btn-primary")); ?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Login</th>
			<!-- <th>Tipo</th> -->

		
	
			<th>Gestor</th>
			
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
			<!-- <td><?=  $usuario['tipo'] ?> </td> -->
					<?php if ($usuario['tipo']==2) { ?>
			<td><?php echo anchor("usuarios/gestor/{$usuario['idUsuario']}","Gestor", array("class" => "btn btn-info"));  ?> </td>
				<?php } else{?>
				<td><?php echo anchor("usuarios/listar","Não é gestor", array("class" => "btn btn-danger"));  ?> </td>
				
		<?php } ?>
			<td><?php echo anchor("usuarios/form/{$usuario['idUsuario']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $usuario['idUsuario']; ?>" onclick="confirmar('conf<?php echo $usuario['idUsuario'];?>')" value="<?php echo base_url("/index.php/usuarios/excluir/".$usuario['idUsuario'].""); ?>">Excluir</button>
			</td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
