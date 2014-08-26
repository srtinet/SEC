<?php
if($produtos){
	foreach($produtos as $produto){
		$idProduto = $produto['idProduto'];
		$descricaoProduto = $produto['descricaoProduto'];
		$tipoProduto = $produto['tipoProduto'];
		$estoqueMinimo = $produto['estoqueMinimo'];
		$estoqueMaximo = $produto['estoqueMaximo'];
		$unidadeProduto = $produto['unidadeProduto'];
	}
}else{
	$idProduto = "";
	$descricao = "";
	$tipo = "";
	$estoqueMinimo = "";
	$estoqueMaximo = "";
	$unidade = "";
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Cadastro de Produtos</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("produto/listar/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
echo form_open("produto/cadastrar");
echo form_hidden('idProduto', $idProduto);
echo inputText("descricaoProduto","Descrição",$descricaoProduto);
echo inputText("tipoProduto","Tipo",$tipoProduto);
echo inputText("estoqueMinimo","Estoque Mínimo",$estoqueMinimo);
echo inputText("estoqueMaximo","Estoque Máximo",$estoqueMaximo);
echo inputText("unidadeProduto","Unidade",$unidadeProduto);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();