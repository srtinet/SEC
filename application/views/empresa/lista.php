<h1>Empresa</h1>
<?= anchor('empresa/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Razao Social</th>
				<th>Atividades</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($empresas as $empresa): 
			?>

		<tr>
			<td><?php  echo $empresa['razaoSocial']  ?> </td>
	<td><?php echo anchor("empresa/atividade/{$empresa['idEmpresa']}","Atividades", array("class" => "btn btn-success"));  ?> </td>
			<td><?php echo anchor("empresa/form/{$empresa['idEmpresa']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("empresa/excluir/{$empresa['idEmpresa']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
