<h1>Empresa</h1>
<?= anchor('empresa/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Razao Social</th>
			<th>Perfil</th>
			<th>Gráficos</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($empresas as $empresa):
			?>
		<tr>
			<td><?php echo $empresa['razaoSocial'];?></td>
			<td><?php echo anchor("empresa/form/{$empresa['idEmpresa']}","Modificar", array("class" => "btn btn-primary"));?></td>
			<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><?php echo anchor("empresa/infoForm/{$empresa['idEmpresa']}", "Perfil", array();?></button></td>
			<td></td>
		</tr>
		<?php
		endforeach;
		?>
	</tbody>
</table>