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
		</div>
		<div class="tab-pane fade taber" id="recebidas">
			<h1>Recados Recebidos</h1>
			<br/>
			<br/>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Empresa</th>
						<th>Destinatário</th>
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
	</div>
</div>
</div>