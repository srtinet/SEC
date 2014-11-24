	<?php 
	if ($atividades){
		foreach ($atividades as $atividade ) {
			


			$descricao=$atividade['descricao'];
			$anexo=$atividade['anexo'];
			$nivel=$atividade['nivel'];
			$idAtividade=$atividade['idAtividade'];

		}
	}
	else{
		$descricao='';
		$anexo='';

		$nivel='';
		$idAtividade=null;
		
	}

?>

<div class="row">
	<div class="col-lg-8">
		<h1>Atividades</h1>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("atividade/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
<?php
	echo form_open("atividade/cadastrar");
	echo inputText("descricao", "Descrição", $descricao);
	echo form_error("descricao");


	$options = array(
		'1'  => 'Operacional',
		'2'    => 'Gestor',
		'3'   => 'Cliente',
	);
	echo inputList("nivel","Aprovação",$options, $nivel);
	echo form_error("anexo");
	


	echo form_label("Anexo obrigatorio","");
	echo '<div class="radio">';
	echo form_label("SIM","chtipo");
	echo form_radio(array(
		'name'        => 'anexo',
		'id'          => 'chtipo',
		'value'       => '1',
		'checked'     => $anexo,
		
		));

	echo '</div><div class="radio">';
	echo form_label("Não","chtipo2");
	echo form_radio(array(
		'name'        => 'anexo',
		'id'          => 'chtipo2',
		'value'       => '2',
		'checked'     => $anexo,
		
		));
	echo '</div>';
	echo form_error("anexo");


	echo form_hidden('idAtividade', $idAtividade);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();



	?>