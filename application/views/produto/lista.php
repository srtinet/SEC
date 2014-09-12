<h1>Produtos</h1>
<?php echo anchor("produto/form", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Descrição</th>
			<th>Tipo</th>
			<th>Unidade</th>
			<th>Modificar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($produtos as $produto) : ?>
		<tr>
			<td><?php echo $produto['descricaoProduto']?></td>
			<td><?php echo $produto['tipoProduto']?></td>
			<td><?php echo $produto['unidadeProduto']?></td>
			<td><?php echo anchor("produto/form/{$produto['idProduto']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $produto['idProduto']; ?>" onclick="confirmar('conf<?php echo $produto['idProduto'];?>')" value="<?php echo base_url("/index.php/produto/excluir/".$produto['idProduto'].""); ?>">Excluir</button>
			</td>

		</tr>
	<?php endforeach?>
</tbody>
</table>