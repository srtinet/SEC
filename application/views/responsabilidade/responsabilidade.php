<h1>Responsabilidade</h1>


<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Reponsabilidade</th>
			<th>Empresa</th>
			<th>Data de Conclusão</th>
			<th>Concluir</th>
			<th>Observação</th>
			<th>Anexo</th>

		</tr>
	</thead>
	<tbody>
		

		<?php 
		foreach ($responsabilidade as $respon) {
			?>
			<tr>
				<td><?php echo $respon['descricao'] ?></td>
				<td><?php echo $respon['razaoSocial'] ?></td>
				<td><?php echo dataMysqlParaPtBr($respon['dataVencimento']) ?></td>
				<td><?php 	if ($respon['estadoResponsabilidade']==0){
					echo form_open("responsabilidade/concluir");
					echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
					echo form_hidden('nivel', $respon['nivel']);
					echo form_hidden('local', 1);
					echo form_hidden('estado', 1);
					echo form_button(array("class"=>"btn btn-success","content"=>"Concluir","type"=>"submit"));
					echo form_close();
				}
				if ($respon['estadoResponsabilidade']==1){ ?>
				<button type="button" class="btn btn-warning">Aguardando Validação</button>
				<?php }?>

					<?php if ($respon['estadoResponsabilidade']==2){ ?>
				<button type="button" class="btn btn-warning">Aguardando Cliente</button>
				<?php }?></td>

				<td><?php echo anchor('responsabilidade/observacao', 'Observação', array("class" => "btn btn-primary")); ?></td>
				<td>


					<?php 

					echo anchor('responsabilidade/anexo', 'Anexos', array("class" => "btn btn-info")); 

					?>


				</td></td>
				<?php  	}?>

			</tbody>
		</table>
