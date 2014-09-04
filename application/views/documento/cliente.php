<?php 

foreach ($documentos as $documento) {
	
}
for ($i=0; $i <2; $i++) { 
		# code...

	?>
	<div class="col-md-10 col-md-offset-1">
		<table class=" table table-bordered">

			<tbody>


				<tr>
					<td colspan="2">
						<img  width="900px" src="<?php echo base_url('img/logo_ras.jpg')  ?>">
					</td>
				</tr>


				<tr>
					<td>
						<h1>Comunicado/Protocolo</h1>
					</td>

					<td>
						<?php echo date("Y-m-d"); ?>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<b>De: RAS REVIRI - EMPRESA DE CONTABILIDADE LTDA : <?php echo $documento['remetente']; ?> </b>
					</td>


				</tr>
				<tr>
					<td colspan="2">
						<b>Para: <?php echo $documento['razaoSocial']; ?>  </b>
					</td>


				</tr>
				<tr>
					<td colspan="2">
						<?php
						$idzao = $documento['Documento_idDocumento'];
						if($documento['descricaoDocumento'] != null){
							$descricao = $documento['descricaoDocumento'];
						}else{
							foreach($comentarioLimits as $comentarioLimit){
								if($idzao == $comentarioLimit['Documento_idDocumento']){
									$descricao = $comentarioLimit['comentario'];
								}
							}
						}
						?>
						Descrição: <?php echo $descricao ?>
					</td>


				</tr>

				<tr>
					<td colspan="2">
						ASSINATURA :_________________________________________________________________________________________________________________
					</td>


				</tr>



			</tbody>
		</table>
	</div>
	<?php }?>