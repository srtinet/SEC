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
						<?php
						$data = date("Y-m-d");
						echo dataMysqlParaPtbr($data);
						 ?>
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
						$descricao = 0;
						if($documento['descricaoDocumento'] != null){
							$descricao = $documento['descricaoDocumento'];
							echo "Descrição: ".$descricao;
						}else{
							foreach($comentarioLimits as $comentarioLimit){
								if($idzao == $comentarioLimit['Documento_idDocumento']){
									$descricao = $comentarioLimit['comentario'];
									echo "Descrição: ".$descricao;
								}
							}
						}
						?>
						
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