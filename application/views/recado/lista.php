<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#visualizada" role="tab" data-toggle="tab">Enviadas</a></li>
		<li class=""><a href="#recebidas" role="tab" data-toggle="tab">Recebidas</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in taber" id="visualizada">
			<h1>Recados Enviados</h1>
			<br/>
			<br/>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Empresa</th>
						<th>Destinatário</th>
						<th>Data Abertura</th>
						<!-- <th>Finalizar</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($enviados as $enviado) : ?>
					<tr>
						<td><?php echo $enviado['razaoSocial']?></td>
						<td><?php echo $enviado['nomeDestinatario']?></td>
						<td><?php echo dataMysqlParaPtBr($enviado['dataAbertura'])?></td>
						<!-- <td><?php echo anchor("mensagem/listar/{$enviado['idRecado']}","Responder", array("class" => "btn btn-primary"));  ?> </td> -->
						<!-- <td><?php echo anchor("#","Finalizar", array("class" => "btn btn-danger"));  ?> </td> -->
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		</div>
		<div class="tab-pane fade taber" id="recebidas">
			<h1>Recados Recebidos</h1>
			<br/>
			<br/>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Empresa</th>
						<th>Remetente</th>
						<th>Data Abertura</th>
						<th>Responder</th>
						<!-- <th>Finalizar</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($recebidos as $recebido) : ?>
					<tr>
						<td><?php echo $recebido['razaoSocial']?></td>
						<td><?php echo $recebido['nomeRemetente']?></td>
						<td><?php echo dataMysqlParaPtBr($recebido['dataAbertura'])?></td>
						<td><?php echo anchor("mensagem/listar/{$recebido['idRecado']}","Responder", array("class" => "btn btn-primary"));  ?> </td>
						<!-- <td><?php echo anchor("#","Finalizar", array("class" => "btn btn-danger"));  ?> </td> -->
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>
</div>