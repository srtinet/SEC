<h1>Sócio</h1>
<?php echo anchor("socio/form/{$idEmpresa}", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Inicio Contribuição</th>
			<th>Empresa</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($socios as $socio) : ?>
			<tr>
				<td><?php echo $socio['nome']?></td>
				<td><?php echo $socio['cpf']?></td>
				<td><?php echo $socio['razaoSocial']?></td>
				<td><?php echo anchor("socio/form/{$idEmpresa}/{$socio['idSocio']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
				<td><?php echo anchor("socio/excluir/{$idEmpresa}/{$socio['idSocio']}","Excluir", array("class" => "btn btn-danger"));  ?> </td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>