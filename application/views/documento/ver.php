


<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#visualizada" role="tab" data-toggle="tab">Enviadas</a></li>
		<li class=""><a href="#recebidas" role="tab" data-toggle="tab">Recebidas</a></li>
			<li class=""><a href="#rejeitadas" role="tab" data-toggle="tab">Rejeitadas</a></li>
		<li class="dropdown">
			<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Consultar <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				<li><a href="#hisEnviado" tabindex="-1" role="tab" data-toggle="tab">Enviadas</a></li>
				<li><a href="#hisDest" tabindex="-1" role="tab" data-toggle="tab">Recebidas</a></li>
			</ul>
		</li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in taber" id="visualizada">


			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Destinatario</th>

						<th>Descrição</th>
						<th>Enviar</th>
					</tr>
				</thead>
				<tbody>


					<?php 


					foreach($enviadas as $enviado): 
						?>

					<tr>
						<td><?php  echo $enviado['descricaoTipoDocumento']  ?> </td>
						<td><?php  echo $enviado['destinatario']  ?> </td>
						<td><?php  echo character_limiter($enviado['descricaoDocumento'], 90);   ?> </td>

						<td><?php echo anchor("documento/cliente/".$enviado['Documento_idDocumento'],"Cliente", array("class" => "btn btn-info",'target'=>'_blank'));  ?> </td>

					</tr>

					<?php 
					endforeach;

					?> </tbody>
				</table>

			</div>
			<div class="tab-pane fade taber" id="recebidas">

				<table class="table table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Documento</th>
							<th>Remetente</th>

							<th>Descrição</th>
							<th>Aceitar</th>
							<th>Rejeitar</th>
						</tr>
					</thead>
					<tbody>


						<?php 


						foreach($recebidas as $recebida): 
							?>

						<tr>
							<td><?php  echo $recebida['descricaoTipoDocumento']  ?> </td>
							<td><?php  echo $recebida['remetente']  ?> </td>
							<td><?php  echo character_limiter($recebida['descricaoDocumento'], 90);   ?> </td>

							<td><?php echo anchor("documento/aceite/".$recebida['idAceiteDocumento'],"Aceitar", array("class" => "btn btn-success"));  ?> </td>
								<td><?php echo anchor("documento/rejeite/".$recebida['idAceiteDocumento'],"Rejeitar", array("class" => "btn btn-danger"));  ?> </td>

							</tr>

						<?php 
						endforeach;

						?> </tbody>
					</table> </div>

								<div class="tab-pane fade taber" id="rejeitadas">

				<table class="table table-striped table-hover table-responsive">
					<thead>
						<tr>
							<th>Documento</th>
							<th>Remetente</th>

							<th>Descrição</th>
							<th>Reenviar</th>
							<th>Baixa Especial</th>
						</tr>
					</thead>
					<tbody>


						<?php 


						foreach($rejeitadas as $rejeitada): 
							?>

						<tr>
							<td><?php  echo $rejeitada['descricaoTipoDocumento']  ?> </td>
							<td><?php  echo $rejeitada['remetente']  ?> </td>
							<td><?php  echo character_limiter($rejeitada['descricaoDocumento'], 70);   ?> </td>

							<td><?php echo anchor("documento/reenviar/".$rejeitada['idAceiteDocumento'],"Reenviar", array("class" => "btn btn-success"));  ?> </td>
								<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Baixa
</button></td>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Baixa Especial</h4>
      </div>
      <div class="modal-body">
    <?php 
echo form_open("documento/baixa");

	echo form_hidden('idAceiteDocumento',$rejeitada['idAceiteDocumento']);

echo inputTextArea("observacao","Observação");

echo form_button(array("class"=>"btn btn-success","content"=>"Registrar","type"=>"submit"));
echo form_close(); 

     ?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

							</tr>

						<?php 
						endforeach;

						?> </tbody>
					</table> 

<!-- Button trigger modal -->

<!-- Modal -->


				</div>
					<div class="tab-pane fade" id="hisEnviado">
							<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Destinatario</th>

						<th>Descrição</th>
						<th>Reenviar</th>
					</tr>
				</thead>
				<tbody>


					<?php 


					foreach($hisEnviadas as $hisEnviada): 
						?>

					<tr>
						<td><?php  echo $hisEnviada['descricaoTipoDocumento']  ?> </td>
						<td><?php  echo $hisEnviada['destinatario']  ?> </td>
						<td><?php  echo character_limiter($hisEnviada['descricaoDocumento'], 90);   ?> </td>

						<td><?php echo anchor("documento/reenviar","Reenviar", array("class" => "btn btn-danger"));  ?> </td>

					</tr>

					<?php 
					endforeach;

					?> </tbody>
				</table>

						</div>
					<div class="tab-pane fade" id="hisDest">
						
				<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>Documento</th>
						<th>Destinatario</th>

						<th>Descrição</th>
						<th>Reenviar</th>
					</tr>
				</thead>
				<tbody>


					<?php 


					foreach($hisRecebidas as $hisRecebida): 
						?>

					<tr>
						<td><?php  echo $hisRecebida['descricaoTipoDocumento']  ?> </td>
						<td><?php  echo $hisRecebida['destinatario']  ?> </td>
						<td><?php  echo character_limiter($hisRecebida['descricaoDocumento'], 90);   ?> </td>

						<td><?php echo anchor("documento/reenviar","Reenviar", array("class" => "btn btn-danger"));  ?> </td>

					</tr>

					<?php 
					endforeach;

					?> </tbody>
				</table>
						</div>
				</div>
			</div>