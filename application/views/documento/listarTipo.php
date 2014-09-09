<h1>Tipos Documento</h1>
<?= anchor('documento/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Descrição</th>
			
			<th>Modificar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($documentos as $documento): 
			?>

		<tr>
			<td><?php  echo $documento['descricao']  ?> </td>

			<td><?php echo anchor("documento/form/{$documento['idTipoDocumento']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
			<td>
				<button class="btn btn-danger " id="conf<?php echo $documento['idTipoDocumento']; ?>" onclick="confirmar('conf<?php echo $documento['idTipoDocumento'];?>')" value="<?php echo base_url("/index.php/documento/excluir/{$documento['idTipoDocumento']}"); ?>">Excluir</button>
			</td>

		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
