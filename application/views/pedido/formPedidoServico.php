<?php
if($pedidosP){
	foreach($pedidosP as $pedidoP){
		$Produto_idProduto = $pedidoP['Produto_idProduto'];
		$idPedido = $pedidoP['idPedido'];
		$quantidadeProduto = $pedidoP['quantidadeProduto'];
	}
}else{
	$Produto_idProduto = "";
	$idPedido = "";
	$quantidadeProduto = "";
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Pedido de Produtos</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("pedido/listar/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
echo form_open("pedido/cadastrarPedidoProduto");
echo form_hidden('idPedido', $idPedido);
$options = array();
$options[0] = "Contato";
foreach($produtos as $p) {
	$options[$p["idProduto"]] = $p["descricaoProduto"];

}
echo inputList("Produto_idProduto","Produto", $options);
// echo form_hidden('Fornecedor_idFornecedor', $Fornecedor_idFornecedor);
echo inputText("quantidadeProduto","Quantidade",$quantidadeProduto);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();