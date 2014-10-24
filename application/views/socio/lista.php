<h1>Sócio</h1>
<?php echo anchor("socio/form/{$idEmpresa}", 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Inicio Contribuição</th>
			<th>Empresa</th>
			<th>Dependentes</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($socios as $socio) : ?>
		<tr>
			<td><?php echo $socio['nome']?></td>
			<td><?php echo $socio['inicioContribuicao']?></td>
			<td><?php echo $socio['razaoSocial']?></td>
			<td>
				<?php 
				if($socio['dependente'] == 1){
					echo anchor("dependente/listar/{$socio['idSocio']}","Dependentes", array("class" => "btn btn-success"));
				}else{
					echo anchor("socio/listar/{$socio['Empresa_idEmpresa']}","Não Possui Dependentes", array("class" => "btn btn-success"));
				}
				?>
			</td>
			<td><?php echo anchor("socio/form/{$idEmpresa}/{$socio['idSocio']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $socio['idSocio']; ?>" onclick="confirmar('conf<?php echo $socio['idSocio'];?>')" value="<?php echo base_url("/index.php/socio/excluir/{$idEmpresa}/{$socio['idSocio']}"); ?>">Excluir</button>
			</td>
		</tr>
	<?php endforeach?>
</tbody>
</table>