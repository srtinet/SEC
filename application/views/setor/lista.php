<h1>Setor</h1>
<?= anchor('setor/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<th>Descrição</th>
		<th>Modificar</th>
		<th>Excluir</th>
	</thead>
	<tbody>
		
			<?php foreach($setor as $s) {?>
			<tr>
			<td><?php echo $s['descricao']?></td>
			<td><?php echo anchor("setor/form/{$s['idSetor']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $s['idSetor']; ?>" onclick="confirmar('conf<?php echo $s['idSetor'];?>')" value="<?php echo base_url("/index.php/setor/excluir/".$s['idSetor'].""); ?>">Excluir</button>
			</td>
			</tr>
			<?php } ?>
		
	</tbody>
</table>