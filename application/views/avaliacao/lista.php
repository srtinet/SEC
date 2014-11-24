<h1>Avaliações dos Fornecedores</h1>
<?php echo anchor("avaliacao/form/{$idFornecedor}", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Empresa</th>
			<th>Data</th>
			<th>Observação</th>
			<th>Pontuação</th>
			<th>Status</th>
			<!-- <th>Modificar</th> -->
			<!-- <th>Excluir</th> -->
		</tr>
	</thead>
	<tbody>
		<?php foreach($avaliacoes as $avaliacao) : ?>
		<tr>
			<td><?php echo $avaliacao['razaoSocial']?></td>
			<td><?php echo dataMysqlParaPtBr($avaliacao['dataAvaliacao'])?></td>
			<td><?php echo $avaliacao['observacao']?></td>
			<?php
			$valorNC = $avaliacao['quantidadeNC'] * 10;
			$resultado = $avaliacao['pontuacaoInicial'] - $valorNC;
			?>
			<td><?php echo $resultado ?></td>
			<?php if($resultado < $avaliacao['pontuacaoMinima']){?>
				<td>
					<button class="btn btn-danger ">Não Recomendada</button>
				</td>
			<?php } else { ?>
				<td>
					<button class="btn btn-success ">Recomendada</button>
				</td>
			<?php }?>



			<!-- <td><?php echo anchor("produto/form/{$produto['idProduto']}","Modificar", array("class" => "btn btn-primary"));  ?> </td> --> 
			<!--  -->

		</tr>
	<?php endforeach?>
</tbody>
</table>