<?php
$usuario = $this->session->userdata['usuario_logado'];
?>

<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		
		<li class="active"><a href="#Produtos" role="tab" data-toggle="tab">Produtos</a></li>
		<li class=""><a href="#Serviços" role="tab" data-toggle="tab">Serviços</a></li>
		<?php
		if($usuario['financeiro'] == 1){ ?>
		<li class=""><a href="#MeusProdutos" role="tab" data-toggle="tab">Meus Pedidos Produtos</a></li>
		<li class=""><a href="#MeusServiços" role="tab" data-toggle="tab">Meus Pedidos Serviços</a></li>
		<?php } ?>

	</ul>
	<div id="myTabContent" class="tab-content">

		<div class="tab-pane fade active in taber" id="Produtos">
			<h1>Pedidos de Produtos</h1>
			<br/>
			<br/>
			<?= anchor('pedido/formPedido', 'Novo', array("class" => "btn btn-primary")); ?>
			<br/>
			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Descrição</th>
						<th>Solicitante</th>
						<th>Data</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($pedidos as $pedido) : ?>
						<tr>
							<td><?php echo $pedido['descricao']?></td>
							<td><?php echo $pedido['nome']?></td>
							<td><?php echo dataMysqlParaPtBr($pedido['dataPedido'])?></td>
							<td>
								<?php
								if($usuario['financeiro'] == 0){
									if($pedido['pedidoProdutoAprovado'] == null){?>
									<button class="btn btn-primary">Pendente</button>
									<?php } else if($pedido['pedidoProdutoAprovado'] == 1){?>
									<button class="btn btn-success">Aprovado</button>
									<?php } else { ?>
									<button class="btn btn-danger">Reprovado</button>
									<?php }
								} else { 
									if($pedido['pedidoProdutoAprovado'] == null){ ?>
									<?php echo anchor("pedido/aceitarPedido/{$pedido['Pedido_idPedido']}", "Aceitar", array("class" => "btn btn-success")); ?>
									<?= anchor("pedido/rejeitarPedido/{$pedido['Pedido_idPedido']}", "Rejeitar", array("class" => "btn btn-danger")); ?>
									<?php } else if($pedido['pedidoProdutoAprovado'] == 1){?>
									<button class="btn btn-success">Aprovado</button>
									<?php } else { ?>
									<button class="btn btn-danger">Reprovado</button>
									<?php } }?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade taber" id="Serviços">
				<h1>Pedidos de Serviços</h1>
				<br/>
				<br/>
				<table class="table table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Solicitante</th>
							<th>Data</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($pedidos as $pedido) : ?>
							<tr>
								<td><?php echo $pedido['descricao']?></td>
								<td><?php echo $pedido['nome']?></td>
								<td><?php echo dataMysqlParaPtBr($pedido['dataPedido'])?></td>
								<td>
									<?php
									if($usuario['financeiro'] == 0){
										if($pedido['pedidoProdutoAprovado'] == null){?>
										<button class="btn btn-primary">Pendente</button>
										<?php } else if($pedido['pedidoProdutoAprovado'] == 1){?>
										<button class="btn btn-success">Aprovado</button>
										<?php } else { ?>
										<button class="btn btn-danger">Reprovado</button>
										<?php }
									} else { 
										if($pedido['pedidoProdutoAprovado'] == null){ ?>
										<button class="btn btn-success">Aceitar</button>
										<button class="btn btn-danger">Rejeitar</button>
										<?php } else if($pedido['pedidoProdutoAprovado'] == 1){?>
										<button class="btn btn-success">Aprovado</button>
										<?php } else { ?>
										<button class="btn btn-danger">Reprovado</button>
										<?php } }?>
									</td>
								</tr>
							<?php endforeach?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade taber" id="MeusServiços">
					<h1>Meus Pedidos de Serviços</h1>
					<br/>
					<br/>
					<table class="table table-striped table-hover table-responsive">
						<thead>
							<tr>
								<th>Descrição</th>
								<th>Solicitante</th>
								<th>Data</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($pedidos as $pedido) :
							if($usuario['idUsuario'] == $pedido['Usuario_idUsuario']){ ?>
							<tr>
								<td><?php echo $pedido['descricao']?></td>
								<td><?php echo $pedido['nome']?></td>
								<td><?php echo dataMysqlParaPtBr($pedido['dataPedido'])?></td>
							</tr>
							<?php }?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="tab-pane fade taber" id="MeusProdutos">
				<h1>Meus Pedidos de Produtos</h1>
				<br/>
				<br/>
				<table class="table table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Solicitante</th>
							<th>Data</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($pedidos as $pedido) : 
						if($usuario['idUsuario'] == $pedido['Usuario_idUsuario']){ ?>
						<tr>
							<td><?php echo $pedido['descricao']?></td>
							<td><?php echo $pedido['nome']?></td>
							<td><?php echo dataMysqlParaPtBr($pedido['dataPedido'])?></td>
						</tr>
						<?php } ?>
					<?php endforeach?>
				</tbody>
			</table>
		</div>