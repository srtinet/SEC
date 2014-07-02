

<div class="bs-example bs-example-tabs">
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#visualizada" role="tab" data-toggle="tab">Enviadas</a></li>
		<li class=""><a href="#recebidas" role="tab" data-toggle="tab">Recebidas</a></li>
		<li class="dropdown">
			<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Consultar <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
				<li><a href="#dropdown1" tabindex="-1" role="tab" data-toggle="tab">Enviadas</a></li>
				<li><a href="#dropdown2" tabindex="-1" role="tab" data-toggle="tab">Recebidas</a></li>
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
						<th>Reenviar</th>
					</tr>
				</thead>
				<tbody>


					<?php 


					foreach($enviadas as $enviado): 
						?>

					<tr>
						<td><?php  echo $enviado['descricaoTipoDocumento']  ?> </td>
						<td><?php  echo $enviado['destinatario']  ?> </td>
						<td><?php  echo $enviado['descricaoDocumento']  ?> </td>

						<td><?php echo anchor("documento/reenviar","Reenviar", array("class" => "btn btn-danger"));  ?> </td>

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
							<td><?php  echo $recebida['descricaoDocumento']  ?> </td>

							<td><?php echo anchor("documento/aceite","Aceitar", array("class" => "btn btn-success"));  ?> </td>
								<td><?php echo anchor("documento/rejeite","Rejeitar", array("class" => "btn btn-danger"));  ?> </td>

							</tr>

						<?php 
						endforeach;

						?> </tbody>
					</table> </div>
					<div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					</div>
					<div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					</div>
				</div>
			</div>