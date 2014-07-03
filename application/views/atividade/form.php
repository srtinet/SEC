	<?php echo validation_errors("<p class='alert alert-danger'>","</p>");?>
	<?php 
	if (isset($atividades)){
		foreach ($atividades as $atividade ) {
			


			// $descricao=$atividade['descricao'];;
			$anexo=$atividade['anexo'];;
			$nivel=$atividade['nivel'];;
			$idAtividade=$atividade['idAtividade'];;

		}
	}
	else{
		// $descricao='';
		$anexo='';

		$nivel='';
		$idAtividade=null;
		
	}



	echo form_open("atividade/cadastrar");
	echo inputText("descricao", "Descrição", $descricao);


	$options = array(
		'1'  => 'Operacional',
		'2'    => 'Gestor',
		'3'   => 'Cliente',
	);
	echo inputList("nivel","Nivel",$options, $nivel);
	
	


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


	echo form_hidden('idAtividade', $idAtividade);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();



	?>