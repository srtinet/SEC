<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#visualizada" role="tab" data-toggle="tab">Produtos</a></li>
		<li class=""><a href="#recebidas" role="tab" data-toggle="tab">Serviços</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in taber" id="visualizada">
			<h1>Pedidos de Produtos</h1>
			<?php echo anchor("pedido/formPedidoProduto", 'Novo', array("class" => "btn btn-primary")); ?>
			<br/>
			<br/>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Aprovado</th>
						<th>Data</th>
						<th>Tipo de Operação</th>
						<!-- <th>Finalizar</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($pedidosP as $pedidoP) : ?>
					<tr>
						<td><?php echo $pedidoP['descricaoProduto']?></td>
						<td><?php echo $pedidoP['quantidadeProduto']?></td>
						<td><?php echo $pedidoP['pedidoProdutoAprovado']?></td>
						<td><?php echo dataMysqlParaPtBr($pedidoP['dataPedido'])?></td>
						<td><?php echo $pedidoP['tipoOperacao']?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade taber" id="recebidas">
		<h1>Pedidos de Serviços</h1>
		<?php echo anchor("pedido/formPedidoServico", 'Novo', array("class" => "btn btn-primary")); ?>
		<br/>
		<br/>
		<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>Serviço</th>
					<th>Quantidade</th>
					<th>Data</th>
					<th>Aprovado</th>
					<th>Finalizar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pedidosS as $pedidoS) : ?>
				<tr>
					<td><?php echo $pedidoS['descricaoServico']; ?></td>
					<td><?php echo $pedidoS['quantidadeServico']?></td>
					<td><?php echo $pedidoS['dataPedido']?></td>
					<td><?php echo $pedidoS['pedidoServicoAprovado']?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>

</div>
</div>
</div>
<!-- -->


<!-- <h1>Pedido de Produto</h1>
<?php $contador=1?>
<?php echo anchor("pedido/formPedidoProduto", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>N° do Pedido</th>
			<th>Usuário</th>
			<th>Data</th>
			<th>Visualizar</th>
			<!-- <th>Data</th> -->
			<!-- <th>Tipo de Operação</th> -->
			<!-- <th>Finalizar</th> -->
		<!-- </tr>
	</thead>
	<tbody>
		<?php foreach($pedidos as $pedido) : ?>
		<tr>
			<!-- <td><?php echo $pedidoP['descricaoProduto']?></td> -->
			<!-- <td><?php echo $pedidoP['quantidadeProduto']?></td> -->
			<!-- <td><?php echo $pedidoP['pedidoProdutoAprovado']?></td> -->
			<!-- <td><?php echo $pedidoP['dataPedido']?></td> -->
			<!-- <td><?php echo $pedidoP['tipoOperacao']?></td> -->
<!-- 			<td><?php echo "Pedido Nº ".$contador++?></td>
			<td><?php echo $pedido['Usuario_idUsuario']?></td>
			<td><?php echo dataMysqlParaPtBr($pedido['dataPedido'])?></td>
			<td><?php echo anchor("pedido/form/{$pedido['idPedido']}","Visualizar", array("class" => "btn btn-info"));  ?></td>
		</tr>
	<?php endforeach;?>
</tbody>
</table> -->