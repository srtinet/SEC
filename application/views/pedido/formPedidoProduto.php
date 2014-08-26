<?php
if($pedidosP){
	foreach($pedidosP as $pedidoS){
		$Produto_idProduto = $pedidoP['Produto_idProduto'];
		$Pedido_idPedido = $pedidoP['Pedido_idPedido'];
		$quantidade = $pedidoP['quantidade'];
	}
}else{
	$Produto_idProduto = "";
	$Pedido_idPedido = "";
	$quantidade = "";
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

$options = array();
$options[0] = "Contato";
foreach($produtos as $p) {
	$options[$p["Produto_idProduto"]] = $p["descricao"];

}
echo inputList("Produto_idProduto","Produto", $options);
// echo form_hidden('Fornecedor_idFornecedor', $Fornecedor_idFornecedor);
echo inputText("quantidade","Quantidade",$quantidade);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();