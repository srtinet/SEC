<h1>Relatório</h1>
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
	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#visualizada" role="tab" data-toggle="tab">Chamadas</a></li>
		</ul>
	</li>
</ul>
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade active in taber" id="visualizada">
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			Filtros
		</button>
		<table class="table table-striped table-hover table-responsive">
			<thead>
				<tr>
					<th>Solicitante</th>
					<th>Empresa</th>
					<th>Observação</th>
					<th>Telefone Comercial</th>
					<th>Telefone Residencial</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($ligacao as $lig): ?>
				<?php if($lig['estado'] == 3){?>
				<tr>
					<td><?php echo $lig['nome']?></td>
					<td><?php echo $lig['razaoSocial']?></td>
					<td><?php echo $lig['observacao']?></td>
					<td><?php echo ""?></td>
					<td><?php echo ""?></td>
				</tr>
				<?php }?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>