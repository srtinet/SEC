<?php
// echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=http://srtisec.net/index.php/ligacao/listar'>";
?>
<h1>Ligações</h1>
<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Solicitante</th>
			<th>Empresa</th>
			<th>Observação</th>
			<th>Telefone Comercial</th>
			<th>Telefone Residencial</th>
			<th>Aceitar</th>
			<th>Reenviar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($lista as $lig): ?>
		<?php if($lig['estado'] != 3){?>
		<tr>
			<td><?php echo $lig['nome']?></td>
			<td><?php echo $lig['razaoSocial']?></td>
			<td><?php echo $lig['observacao']?></td>
			<td><?php echo $lig['telefone']?></td>
			<td><?php echo $lig['telefoneResidencial']?></td>
			<td>
			<?php if($lig['estado'] == 1){
				echo form_open("ligacao/alteraEstado");
				echo form_hidden('estado', 3);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-success glyphicon glyphicon-ok","content"=>" ","type"=>"submit"));
				echo form_close();
			}else if ($lig['estado'] == 0){
				echo form_open("ligacao/listar");
				echo form_hidden('estado', 0);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-primary","content"=>"Pendente","type"=>"submit"));
				echo form_close();
			}else{
				echo form_open("ligacao/listar");
				echo form_hidden('estado', 2);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-danger","content"=>"Ocupado","type"=>"submit"));
				echo form_close();
				}?>
			</td>
			<td>
				<?php
				echo form_open("ligacao/alteraEstado");
				echo form_hidden('estado', 0);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-danger glyphicon glyphicon-arrow-right","content"=>" ","type"=>"submit"));
				echo form_close();
				?>
			</td>
			<?php }?>
		<?php endforeach; ?>
	</tbody>
</table>