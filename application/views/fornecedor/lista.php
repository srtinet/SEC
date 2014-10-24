<h1>Fornecedores</h1>
<?php echo anchor("fornecedor/form", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Empresa</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>email</th>
			<th>Avaliação</th>
			<th>Modificar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($fornecedores as $fornecedor) : ?>
		<tr>
			<td><?php echo $fornecedor['razaoSocial']?></td>
			<td><?php echo $fornecedor['logradouro']." ".$fornecedor['logradouroComercial']?></td>
			<td><?php echo $fornecedor['telefone']?></td>
			<td><?php echo $fornecedor['email']?></td>
						<td><?php echo anchor("avaliacao/listar/{$fornecedor['idFornecedor']}","Avaliações", array("class" => "btn btn-success"));  ?> </td>
			<td><?php echo anchor("fornecedor/form/{$fornecedor['idFornecedor']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $fornecedor['idFornecedor']; ?>" onclick="confirmar('conf<?php echo $fornecedor['idFornecedor'];?>')" value="<?php echo base_url("/index.php/fornecedor/excluir/".$fornecedor['idFornecedor'].""); ?>">Excluir</button>
			</td>

		</tr>
	<?php endforeach?>
</tbody>
</table>