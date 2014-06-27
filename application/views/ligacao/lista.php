<h1>Ligações</h1>
<?= anchor('empresa/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>

<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Solicitante</th>
			<th>Empresa</th>
			<th>Telefone Comercial</th>
			<th>Telefone Residencial</th>
			<th>Aceitar</th>
			<th>Reenviar</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Solicitante</th>
			<th>Empresa</th>
			<th>Telefone Comercial</th>
			<th>Telefone Residencial</th>
			<th>Aceitar</th>
			<th>Reenviar</th>
		</tr>
	</tfoot>
	<tbody>
	<?php foreach($ligacao as $lig): ?>
		<tr>
			<td><?php echo $lig['login']?></td>
			<td><?php echo $lig['razaoSocial']?></td>
		</tr>
	<?php endforeach; ?> 
	</tbody>
</table>

