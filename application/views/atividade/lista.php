<h1>Atividade</h1>
<?= anchor('atividade/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Descrição</th>
			
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($atividades as $atividade): 
			?>

		<tr>
			<td><?php  echo $atividade['descricao']  ?> </td>

			<td><?php echo anchor("atividade/form/{$atividade['idAtividade']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("atividade/excluir/{$atividade['idAtividade']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
