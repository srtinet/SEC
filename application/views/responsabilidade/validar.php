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
				<td><?php 
				
				echo anchor('responsabilidade/concluir/'.$respon['idEstadoResponsabilidade'].'/2/2', 'Validar', array("class" => "btn btn-success")); 
				echo anchor('responsabilidade/concluir/'.$respon['idEstadoResponsabilidade'].'/0/2', 'Refazer', array("class" => "btn btn-danger")); 
				
				

				?></td>
				<td><?php echo anchor('responsabilidade/observacao', 'Observação', array("class" => "btn btn-primary")); ?></td>
				<td>


					<?php 

					echo anchor('responsabilidade/anexo', 'Anexos', array("class" => "btn btn-info")); 

					?>


				</td></td>
		 <?php  	}?>
		
 </tbody>
	</table>
