<div id="titulo">
	<h1 >Ligações</h1>
	<br/>
	<br/>
</div>
<div id="container">
	<script type="text/javascript">
	var controller = 'ligacao';
	var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';
	
	function load_data_ajax(type){
		$.ajax({
			'url' : base_url + '/' + controller + '/listarTelefonista2',
			'type' : 'POST', //the way you want to send data to your URL
			'data' : {'type' : type},
'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
var container = $('.table'); //jquery selector (get element by id)
if(data){
	container.html(data);
}
if($("#titulo").length){
	$("#titulo").css("display", "none", "position", "absolute");
}
}
});
	}
	setTimeout(load_data_ajax, 1000);
	</script>


	<!-- <button onclick="()">Load list (type 1)</button> -->
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
				<td><?php echo $lig['telefone']?></td>
				<td><?php echo $lig['telefoneResidencial']?></td>
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

</div>