	<?php 
	if ($atividades){
	foreach ($atividades as $atividade ) {
	


$descricao=$atividade['descricao'];;
$anexo=$atividade['anexo'];;
$nivel=$atividade['nivel'];;
$idAtividade=$atividade['idAtividade'];;

		}
}
		else{
$descricao='';
$anexo='';

$nivel='';
$idAtividade=null;
		
	}



	echo form_open("atividade/cadastrar");
	echo form_label("Descrição","descricao");
	echo form_input(array("name"=>"descricao","class"=>"form-control","id"=>"descricao" ,"value"=>$descricao,  "maxlength"=>"255"));


$options = array(
                  '1'  => 'Operacional',
                  '2'    => 'Gestor',
                  '3'   => 'Cliente',
             
                );

	echo form_label("Nivel","nivel");
echo form_dropdown("nivel", $options,$nivel,'class="form-control" id="nivel"');
      
      


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
	echo form_button(array("class"=>"btn btn-primary","content"=>"Login","type"=>"submit"));
	echo form_close();



	?>