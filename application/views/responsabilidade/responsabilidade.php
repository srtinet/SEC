<h1>Responsabilidade</h1>


<?php 

$empresa=array();
$atividade=array();
$usuario=array()	;	
foreach ($filtroEmpresa as $filtro) {
	$empresa[$filtro['idEmpresa']]=	$filtro['razaoSocial'];
	
}
foreach ($filtroAtividade as $filtro) {
	$atividade[$filtro['idAtividade']]=	$filtro['atividadedescricao'];
	
}
$user=$this->session->userdata('usuario_logado');
 if ($user['tipo']==2){
foreach ($filtroUsuario as $usuarios) {
	$usuario[$usuarios['idUsuario']]=	$usuarios['usuarioNome'];
	
}
}else
{
$usuario[$user['idUsuario']]=	$user['nome'];
	# code...

}


echo form_open("responsabilidade/filtrar");

echo inputList("Empresa_idEmpresa","Empresa",$empresa);
echo inputList("Atividade_idAtividade","Atividade",$atividade);
echo inputList("Usuario_idUsuario","Usuario",$usuario);
echo DataPicker("dataInicio","De");
echo DataPicker("dataFim","á");
echo form_button(array("class"=>"btn btn-success","content"=>"Filtrar","type"=>"submit"));
echo form_close();


?>

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
				<td><?php 	if ($respon['estadoResponsabilidade']==0){
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

				<td><?php echo anchor('responsabilidade/observacao', 'Observação', array("class" => "btn btn-primary")); ?></td>
				<td>


					<?php 

					echo anchor('responsabilidade/anexo', 'Anexos', array("class" => "btn btn-info")); 

					?>


				</td></td>
				<?php  	}?>

			</tbody>
		</table>
