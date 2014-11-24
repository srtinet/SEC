<div class="row">
	<div class="col-lg-8">
		<h1>Pedidos de Produtos</h1>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php 
		$usuario = $this->session->userdata['usuario_logado'];
		echo anchor("pedido/novoPedido","Fechar Pedido", array("class" => "btn btn-success"));	
		if($usuario['financeiro'] != 1){
			echo anchor("pedido/listarProdutoPedido","Fechar Pedido", array("class" => "btn btn-success"));	
		}
		
		?> 
	</div>
</div>

<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Produtos</th>
			<th>Quantidade</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach($listaProdutos as $listaProduto) : ?>
			<tr>
				<td><?php echo $listaProduto['descricaoProduto']?></td>
				<td><?php echo $listaProduto['quantidadeProduto']?></td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>