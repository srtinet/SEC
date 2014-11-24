
<div class="row">
	<div class="col-lg-8">
		<h1>Ligações</h1>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("empresa/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
<?php

echo form_open("ligacao/cadastrar");

$options = array();
$options[0] = "Contato";
foreach($empresa as $e) {
	$options[$e["idEmpresa"]] = $e["razaoSocial"];

}

echo inputList("Empresa_idEmpresa","Empresa",$options);

echo inputTextArea("observacao", "Observação");

$idUsuario = $this->session->userdata("usuario_logado");
$estado = 0;
echo form_hidden('Usuario_idUsuario', $idUsuario['idUsuario']);
echo form_hidden('estado', $estado);
echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();