<h1>Agenda</h1>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($agendas as $agenda): ?>
		<tr>
			<td><?php echo $agenda['Nome']?></td>
			<td><?php echo $agenda['Telefone']?></td>
		</tr>	
		<?php endforeach; ?>
	</tbody>
</table>