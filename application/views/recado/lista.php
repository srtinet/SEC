<h1>Recados</h1>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Empresa</th>
			<th>Usuário</th>
			<th>Data Abertura</th>
			<th>Responder</th>
			<th>Finalizar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($recados as $recado) : ?>
		<tr>
			<td><?php echo $recado['razaoSocial']?></td>
			<td><?php echo $recado['nome']?></td>
			<td><?php echo dataMysqlParaPtBr($recado['dataAbertura'])?></td>
			<td><?php echo anchor("mensagem/listar/{$recado['idRecado']}","Responder", array("class" => "btn btn-primary"));  ?> </td>
			<td><?php echo anchor("#","Finalizar", array("class" => "btn btn-danger"));  ?> </td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
