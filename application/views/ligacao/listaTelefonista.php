<div id="titulo">
	<h1 >Ligações</h1>
	<br/>
	<br/>
</div>
<div id="container">
	<script type="text/javascript">
	var controller = 'ligacao';
	var base_url = '<?php echo site_url();?>';
	function load_data_ajax(){
		$.ajax({
			'url' : base_url + '/' + controller + '/listarTelefonista2',
				'type' : 'POST', //the way you want to send data to your URL
				'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
					if(data)
					{
						var html="";
						var Objeto = eval('(' + data + ')');
						for (var i = Objeto.length - 1; i >= 0; i--){
								// action = "<?php echo form_open('ligacao/alteraEstado')?>";
								// alert(Objeto[i].nome);
								form ='<form action="http://srtisec.net/index.php/ligacao/alteraEstado" method="post">'+'<input type="hidden" name="estado" value="1">'+'<input type="hidden" name="idTelefonema" value='+Objeto[i].idTelefonema+'>'+'<button class="btn btn-success">Concluida</button>'+'</form>'+'<form action="http://srtisec.net/index.php/ligacao/alteraEstado" method="post">'+'<input type="hidden" name="estado" value="2">'+'<input type="hidden" name="idTelefonema" value='+Objeto[i].idTelefonema+'>'+'<button class="btn btn-danger">Ocupada</button>'+'</form>';
								// form ='<form action="http://localhost/SEC/index.php/ligacao/alteraEstado" method="post">'+'<input type="hidden" name="estado" value="1">'+'<input type="hidden" name="idTelefonema" value='+Objeto[i].idTelefonema+'>'+'<button class="btn btn-success">Concluida</button>'+'</form>'+'<form action="http://localhost/SEC/index.php/ligacao/alteraEstado" method="post">'+'<input type="hidden" name="estado" value="2">'+'<input type="hidden" name="idTelefonema" value='+Objeto[i].idTelefonema+'>'+'<button class="btn btn-danger">Ocupada</button>'+'</form>';
								vermelho = 0;
								if(Objeto[i].estado == 2){
									vermelho = '<tr class="danger">';
								}else{
									vermelho = '<tr>';
								}

								html += vermelho+"<td>"+Objeto[i].nome+"</td>"+"<td>"+Objeto[i].razaoSocial+"</td>"+"<td>"+Objeto[i].observacao+"</td>"+"<td>"+Objeto[i].telefone+"</td>"+"<td>"+Objeto[i].telefoneResidencial+"</td>"+"<td>"+form+"</td>"+"</tr>";
						}
						$('.content').html(html);
					}
				}
			});
	}
	setInterval(function() { load_data_ajax(); }, 5000);
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
		<tbody class="content">

		</tbody>
	</table>

</div>