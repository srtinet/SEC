<h1>Agenda</h1>
<?php echo anchor("agenda/form", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Modificar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($agendas as $agenda): ?>
		<tr>
			<td><?php echo $agenda['Nome']?></td>
			<td><?php echo $agenda['Telefone']?></td>
			<td><?php echo anchor("agenda/form/{$agenda['idAgenda']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $agenda['idAgenda']; ?>" onclick="confirmar('conf<?php echo $agenda['idAgenda'];?>')" value="<?php echo base_url("/index.php/agenda/excluir/".$agenda['idAgenda'].""); ?>">Excluir</button>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>