<h1>Responsabilidade</h1>


<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Reponsabilidade</th>
				<th>Empresa</th>
				<th>Data de Conclusão</th>
				<th>Aceitar</th>
				<th>Rejeitar</th>
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
			
					echo form_open("responsabilidade/concluir");
					echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
					echo form_hidden('nivel', $respon['nivel']);
					echo form_hidden('local', 2);
					echo form_hidden('estado', 2);
					echo form_button(array("class"=>"btn btn-success","content"=>"Validar","type"=>"submit"));
					echo form_close();
	?></td><td>

			<?php 
										echo form_open("responsabilidade/concluir");
					echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
					echo form_hidden('nivel', $respon['nivel']);
					echo form_hidden('local', 2);
					echo form_hidden('estado', 0);
					echo form_button(array("class"=>"btn btn-danger","content"=>"Refazer","type"=>"submit"));
					echo form_close();
				
				

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
