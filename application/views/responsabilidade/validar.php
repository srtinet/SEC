 <?php
$dataHJ = date("Y-m-d");
// date("Y-m-d")
$usuarioLogado = $this->session->userdata['usuario_logado']['idUsuario'];
?>
<script type="text/javascript">
var con = 'responsabilidade';
var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

function load_data_anexo(type){
	$.ajax({
		'url' : base_url + '/' + con + '/puxarAnexo/',
			'type' : 'POST', //the way you want to send data to your URL
			'data' : {'type' : type},
'success' : function(data){ //probably this request will return anything, it'll be put in var "data"

var container = $('#list'+type); //jquery selector (get element by id)
var valor = jQuery.parseJSON(data);


if(data){
	for(var i=0;i<valor.length;i++){
		$('#list'+type+'').append('<tr><td><a href="<?php echo base_url() ?>uploads/'+valor[i].caminho+'" target="_blank" >Anexo '+[i+1]+'</a></td><td>'+valor[i].descricao+'</td></tr>');
	};
}
}
});
}
</script>

<script type="text/javascript">

function load_data_observacao(type){
	$.ajax({
		'url' : base_url + '/observacao/listarUsuarioObservacao/',
			'type' : 'POST', //the way you want to send data to your URL
			'data' : {'type' : type},
'success' : function(data){ //probably this request will return anything, it'll be put in var "data"

var container = $('#observa'+type); //jquery selector (get element by id)
var valor = jQuery.parseJSON(data);


if(data){
	for(var i=0;i<valor.length;i++){
		$('#observa'+type+'').append('<tr><td>'+valor[i].nome+'</td><td>'+valor[i].observacao+'</td></tr>');
	};
}
}
});
}
</script>	
 	<h1>Responsabilidade</h1>


 	<table class="table table-striped table-hover table-responsive">
 		<thead>
 			<tr>
 				<th>Reponsabilidade</th>
 				<th>Empresa</th>
 				<th>Data de Conclusão</th>
 				<th>Aceitar</th>
 				<th>Rejeitar</th>
 				<th>Observação</th>
 				<th>Anexo</th>

 			</tr>
 		</thead>
 		<tbody>


 			<?php 
 			foreach ($responsabilidade as $respon) {
 				?>
 				<tr>
 					<td><?php echo $respon['descricao'] ?></td>
 					<td><?php echo $respon['razaoSocial'] ?></td>
 					<td><?php echo dataMysqlParaPtBr($respon['dataVencimento']) ?></td>
 					<td><?php 

 					echo form_open("responsabilidade/concluir");
 					echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
 					echo form_hidden('nivel', $respon['nivel']);
 					echo form_hidden('local', 2);
 					echo form_hidden('estado', 4);
 					echo form_button(array("class"=>"btn btn-success","content"=>"Validar","type"=>"submit"));
 					echo form_close();
 					?></td><td>

 					<?php 
 					echo form_open("responsabilidade/concluir");
 					echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
 					echo form_hidden('nivel', $respon['nivel']);
 					echo form_hidden('local', 2);
 					echo form_hidden('estado', 0);
 					echo form_button(array("class"=>"btn btn-danger","content"=>"Refazer","type"=>"submit"));
 					echo form_close();



 					?></td>
 					<td>
 						<button class="btn btn-primary" data-toggle="modal" data-target="#obs<?php echo $respon['idResponsabilidade'] ?>">
 							Observação
 						</button>
 						<div class="modal fade" id="obs<?php echo $respon['idResponsabilidade'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 							<div class="modal-dialog">
 								<div class="modal-content">
 									<div class="modal-header">
 										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
 										<h4 class="modal-title" id="myModalLabel">Observação</h4>
 									</div>
 									<div class="modal-body">
 										<?php
 										echo form_open('observacao/cadastrar');
 										echo form_hidden('Responsabilidade_idResponsabilidade', $respon['idResponsabilidade']);
 										echo form_hidden('Usuario_idUsuario', $usuarioLogado);
 										echo inputTextArea("observacao","Observação");
 										echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));

 										echo form_close();
 										?>
 									</form>
 									<table id="observa<?php echo $respon['idResponsabilidade']?>" class="table table-striped table-responsive">
 										<thead>
 											<tr>
 												<th>Usuário</th>
 												<th>Observação</th>
 											</tr>
 										</thead>
 										<tbody>
 										</div>
 										<div class="modal-footer">
 											<button class="btn btn-success" onclick="load_data_observacao(<?php echo $respon['idResponsabilidade'] ?>)">Ver Observação</button>
 											<div class="row">
 											</div>
 										</div>
 									</table>
 								</div>
 							</div>
 						</div>
 					</td>
 					<td>
					<!-- 	<?php 
						echo anchor('responsabilidade/anexo', 'Anexos', array("class" => "btn btn-info")); 
						?> -->


						<button class="btn btn-info" data-toggle="modal" data-target="#respon<?php echo $respon['idResponsabilidade'] ?>" >
							Anexos
						</button>
						<div class="modal fade" id="respon<?php echo $respon['idResponsabilidade'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="myModalLabel">Anexo</h4>
									</div>
									<div class="modal-body">

										<?php

										echo form_open_multipart('upload/do_upload');
										echo form_upload('userfile','','id="userfile"');
										echo form_hidden('Responsabilidade_idResponsabilidade', $respon['idResponsabilidade']);
										echo "<br>";
										echo inputText("descricao","Descrição");
										echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));

										echo form_close();



										?>

									</form>
									<table id="list<?php echo $respon['idResponsabilidade']?>" class="table table-striped table-responsive">
										<thead>
											<tr>
												<th>Anexo</th>
												<th>Descricao</th>
											</tr>
										</thead>
										<tbody>
										</div>

										<div class="modal-footer" >

											<button class="btn btn-success" onclick="load_data_anexo(<?php echo $respon['idResponsabilidade'] ?>)">Ver anexo(s)</button>

											<div class="row">
											</div>
										</div>
									</table>
								</div>

							</div>
						</div>
					</td>
 					<?php  	}?>

 				</tbody>
 			</table>
