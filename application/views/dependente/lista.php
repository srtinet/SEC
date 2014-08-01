<h1>Dependentes do Sócio</h1>
<?php echo anchor("dependente/form/{$idSocio}", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data de Nascimento</th>
			<th>Modificar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($dependentes as $dependente) : ?>
		<tr>
			<td><?php echo $dependente['nome']?></td>
			<?php
				$ano = dataMysqlParaPtBr($dependente['dataNascimento']);
			?>
			<td><?php echo calc_idade($ano);?></td>
			<td><?php echo anchor("dependente/form/{$idSocio}/{$dependente['idDependente']}","Modificar", array("class" => "btn btn-primary"));?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $dependente['idDependente']; ?>" onclick="confirmar('conf<?php echo $dependente['idDependente'];?>')" value="<?php echo base_url("/index.php/dependente/excluir/{$idSocio}/{$dependente['idDependente']}"); ?>">Excluir</button>
			</td>
			
		</tr>
	<?php endforeach?>
</tbody>
</table>