<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var content = $('#content');

//pre carregando o gif
	loading = new Image(); loading.src = "<?php echo base_url('img/loading.gif') ?>";
		$('.table').live('load', function( e ){
			e.preventDefault();
			content.html( '<img src="<?php echo base_url("img/loading.gif") ?>" />' );

			var href = $( this ).attr('href');
			$.ajax({
				url: href,
				success: function( response ){
//forçando o parser
					var data = $( '<div>'+response+'</div>' ).find('.table').html();

//apenas atrasando a troca, para mostrarmos o loading
					window.setTimeout( function(){
						content.fadeOut('slow', function(){
							content.html( data ).fadeIn();
						});
					}, 5 );
				}
			});

		});
});
</script>
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
			<th>Estado</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($lista as $lig): ?>
		<?php if($lig['estado'] == 0 || $lig['estado'] == 2){?>
		<tr>
			<td><?php echo $lig['nome']?></td>
			<td><?php echo $lig['razaoSocial']?></td>
			<td><?php echo $lig['observacao']?></td>
			<td><?php echo ""?></td>
			<td><?php echo ""?></td>
			<td>
				<?php
				echo form_open("ligacao/alteraEstado");
				echo form_hidden('estado', 1);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-success","content"=>"Feita","type"=>"submit"));
				echo form_close();
				echo form_open("ligacao/alteraEstado");
				echo form_hidden('estado', 2);
				echo form_hidden('idTelefonema', $lig['idTelefonema']);
				echo form_button(array("class"=>"btn btn-danger","content"=>"Ocupado","type"=>"submit"));
				echo form_close();
				?>
			</td>
			<?php }?>
		<?php endforeach; ?>
	</tbody>
</table>

