<?php
if($avaliacoes){
	foreach($avaliacoes as $avaliacao){
		$idAvaliacao = $avaliacao['idAvaliacao'];
		$Fornecedor_idFornecedor = $avaliacao['Fornecedor_idFornecedor'];
		$dataAvaliacao = $avaliacao['dataAvaliacao'];
		$observacao = $avaliacao['observacao'];
		$quantidadeNC = $avaliacao['quantidadeNC'];
	}
}else{
	$idAvaliacao = "";
	$Fornecedor_idFornecedor = $idFornecedor;
	$dataAvaliacao = "0000/00/00";
	$observacao = "";
	$quantidadeNC = "";
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Cadastro de Avaliações</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("avaliacao/listar/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
echo form_open("avaliacao/cadastrar");
echo form_hidden('idAvaliacao', $idAvaliacao);
echo form_hidden('idFornecedor', $Fornecedor_idFornecedor);


$options = array();
$options[0] = "Contato";
foreach($fornecedores as $f) {
	$options[$f["idFornecedor"]] = $f["razaoSocial"];

}
echo inputList("Fornecedor_idFornecedor","Fornecedor", $options);
// echo form_hidden('Fornecedor_idFornecedor', $Fornecedor_idFornecedor);
echo inputText("observacao","Observação",$observacao);
echo DataPicker("dataAvaliacao","Data da Avaliação",$dataAvaliacao);
echo inputText("quantidadeNC","Quantidade de Não Conformidades",$quantidadeNC);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();