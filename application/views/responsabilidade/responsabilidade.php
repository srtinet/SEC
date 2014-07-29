<h1>Responsabilidade</h1>
<?php

$empresa=array();
$atividade=array();
$usuario=array()	;
$empresa[0]=	"Todas";
foreach ($filtroEmpresa as $filtro) {
	$empresa[$filtro['idEmpresa']]=	$filtro['razaoSocial'];

}
$atividade[0]=	"Todas";
foreach ($filtroAtividade as $filtro) {
	$atividade[$filtro['idAtividade']]=	$filtro['atividadedescricao'];

}
$user=$this->session->userdata('usuario_logado');
if ($user['tipo']==2){

	$usuario[0]=	"Todos";
	foreach ($filtroUsuario as $usuarios) {
		$usuario[$usuarios['idUsuario']]=	$usuarios['usuarioNome'];

	}
}else
{
	$usuario[$user['idUsuario']]=	$user['nome'];
	# code...

}





?>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	Filtros
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Filtros</h4>
			</div>
			<div class="modal-body">
				<?php echo form_open("responsabilidade/filtrar");

				echo inputList("Empresa_idEmpresa","Empresa",$empresa);
				echo inputList("Atividade_idAtividade","Atividade",$atividade);
				echo inputList("Usuario_idUsuario","Usuario",$usuario);
				echo DataPicker("dataInicio","De");
				echo DataPicker("dataFim","á");
				echo form_button(array("class"=>"btn btn-success","content"=>"Filtrar","type"=>"submit"));
				echo form_close(); 

				?>


			</div>
			<div class="modal-footer">
				<h4 class="modal-title" id="myModalLabel">Filtros ativos</h4>
				<div class="row">
					<?php 
					$filtro=$this->session->userdata('filtro');
					$periodo=$this->session->userdata('periodo');
					if(isset($filtro['idEmpresa'])){
						
						echo '<span class="bg-primary">Empresa |</span>';



					}
					if(isset($filtro['idAtividade'])){
						echo '<span class="bg-primary">Atividade | </span>';


					}
					if(isset($filtro['idUsuario'])){
						echo '<span class="bg-primary">Atividade | </span>';


					}
					if(isset($periodo['dataInicio'])){
						echo '<span class="bg-primary">Periodo: '.$periodo['dataInicio'].' á '.$periodo['dataFim'].' </span>';


					}
					

					?></div>
					<?= anchor('responsabilidade/limparFiltro', 'Limpar Filtro', array("class" => "btn btn-danger")); ?>
				</div>
			</div>
		</div>

	</div>



	<table class="table table-striped table-hover table-responsive">
		<thead>
			<tr>
				<th>Reponsabilidade</th>
				<th>Empresa</th>
				<th>Data de Conclusão</th>
				<th>Concluir</th>
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
					<td><?php if ($respon['estadoResponsabilidade']==0){
						echo form_open("responsabilidade/concluir");
						echo form_hidden('idEstadoResponsabilidade', $respon['idEstadoResponsabilidade']);
						echo form_hidden('nivel', $respon['nivel']);
						echo form_hidden('local', 1);
						echo form_hidden('estado', 1);
						echo form_button(array("class"=>"btn btn-success","content"=>"Concluir","type"=>"submit"));
						echo form_close();
					}
					if ($respon['estadoResponsabilidade']==1){ ?>
					<button type="button" class="btn btn-warning">Aguardando Validação</button>
					<?php }?>

					<?php if ($respon['estadoResponsabilidade']==2){ ?>
					<button type="button" class="btn btn-warning">Aguardando Cliente</button>
					<?php }?></td>

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
										echo inputTextArea("observacao","Observação");
										echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));

										echo form_close();
										?>
									</form>
								</div>
								<div class="modal-footer">
									<!-- <h4 class="modal-title" id="myModalLabel">Filtros ativos</h4> -->
									<div class="row">
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td>
					<!-- 	<?php 
						echo anchor('responsabilidade/anexo', 'Anexos', array("class" => "btn btn-info")); 
						?> -->


						<button class="btn btn-info" data-toggle="modal" data-target="#respon<?php echo $respon['idResponsabilidade'] ?>">
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
										echo inputText("descricao","Descrição");
										echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));

										echo form_close();



										?>

									</form>
								</div>
								<div class="modal-footer">
									<!-- <h4 class="modal-title" id="myModalLabel">Filtros ativos</h4> -->
									<div class="row">
									</div>
								</div>
							</div>

						</div>
					</div>
				</td></td>
				<?php  	}?>
			</tbody>
		</table>