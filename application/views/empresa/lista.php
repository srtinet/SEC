<h1>Empresa</h1>
<?= anchor('empresa/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Razao Social</th>
			<th>Responsaveis</th>
			<th>Atividades</th>
			<th>Status</th>
			<th>Socios</th>
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>


		<?php 


		foreach($empresas as $empresa): 
			?>

		<tr>
			<td><?php  echo $empresa['razaoSocial'];  ?> </td>
			<td><?php echo anchor("empresa/responsaveis/{$empresa['idEmpresa']}","Responsaveis", array("class" => "btn btn-info"));  ?> </td>
			<td><?php echo anchor("empresa/atividade/{$empresa['idEmpresa']}","Atividades", array("class" => "btn btn-success"));  ?> </td>
			<?php
				switch ($empresa['statusEmpresa']) {
					case 1:
					$empresa['statusEmpresa'] = 'ABERTA';
					break;
					case 2:
					$empresa['statusEmpresa'] = 'FECHADA';
					break;
					case 3:
					$empresa['statusEmpresa'] = 'EM ANDAMENTO';
					break;
					case 4:
					$empresa['statusEmpresa'] = 'INATIVA';
					break;
					case 5:
					$empresa['statusEmpresa'] = 'SEM MOVIMENTO';
					break;
					case 6:
					$empresa['statusEmpresa'] = 'TRANSFERIDA PARA OUTRO ESCRITÓRIO';
					break;
				}
			// $string = $empresa['statusEmpresa'];
			$string = character_limiter($empresa['statusEmpresa'], 10);
			?>
			
			<td><button class="btn btn-primary"><?php  echo $string ?></button></td>
			<td><?php echo anchor("socio/listar/{$empresa['idEmpresa']}","Socios", array("class" => "btn btn-warning"));  ?> </td>
			<td><?php echo anchor("empresa/form/{$empresa['idEmpresa']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $empresa['idEmpresa']; ?>" onclick="confirmar('conf<?php echo $empresa['idEmpresa'];?>')" value="<?php echo base_url("/index.php/empresa/excluir/".$empresa['idEmpresa'].""); ?>">Excluir</button>
			</td>
		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>