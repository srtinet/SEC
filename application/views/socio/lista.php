<h1>Sócio</h1>
<?= anchor('socio/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Inicio Contribuição</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($socios as $socio) : ?>
			<tr>
				<td><?php echo $socio['nome']?></td>
				<td><?php echo $socio['inicioContribuicao']?></td>
				<td><?php echo anchor("socio/form/{$socio['idSocio']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
				<td><?php echo anchor("socio/excluir/{$socio['idSocio']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>