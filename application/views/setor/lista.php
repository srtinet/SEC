<h1>Setor</h1>
<?= anchor('setor/form', 'Novo', array("class" => "btn btn-primary")); ?>
<table class="table table-hover">
	<thead>
		<th>Descrição</th>
		<th>Modificar</th>
		<th>Excluir</th>
	</thead>
	<tbody>
		
			<?php foreach($setor as $s) {?>
			<tr>
			<td><?php echo $s['descricao']?></td>
			<td><?php echo anchor("setor/form/{$s['idSetor']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("setor/excluir/{$s['idSetor']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>
			</tr>
			<?php } ?>
		
	</tbody>
</table>