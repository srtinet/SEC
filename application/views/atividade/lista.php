<?php
    $usuario = $this->session->userdata['usuario_logado'];
  ?>
<h1>Atividade</h1>
<?= anchor('atividade/form', 'Novo', array("class" => "btn btn-primary")); ?>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Descrição</th>
			<?php
				if($usuario['tipo'] == 4){
			?>
				<th>Modificar</th>
				<th>Apagar</th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
		
		
		<?php 


		foreach($atividades as $atividade): 
			?>

		<tr>
			<td><?php  echo $atividade['descricao']  ?> </td>
			<?php
				if($usuario['tipo'] == 4){
			?>
				<td><?php echo anchor("atividade/form/{$atividade['idAtividade']}","Modificar", array("class" => "btn btn-primary"));  ?> </td>
				<td>
					<button class="btn btn-danger " id="conf<?php echo $atividade['idAtividade']; ?>" onclick="confirmar('conf<?php echo $atividade['idAtividade'];?>')" value="<?php echo base_url("/index.php/atividade/excluir/".$atividade['idAtividade'].""); ?>">Excluir</button>
				</td>
			<?php } ?>



		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
