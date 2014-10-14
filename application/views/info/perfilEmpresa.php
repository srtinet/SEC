<?php 
foreach ($empresas as $empresa) {
}
for ($i=0; $i <2; $i++) { 
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
					<td colspan="2">
						<h1>Perfil Empresa</h1>
					</td>
				</tr>
				<tr>
					<td colspan="2">
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