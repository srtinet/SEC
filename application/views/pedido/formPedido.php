<div class="row">
	<div class="col-lg-8">
		<!-- <h3>Usuários</h3> -->
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("pedido/listar/","Voltar", array("class" => "btn btn-danger"));  ?> 
	</div>
</div>
	
	<h1>Usuários</h1>
<?php
	if($pedidos){
		foreach ($pedidos as $pedido) {
			$descricao = $pedido['descricao'];
			$idPedido = $pedido['idPedido'];
			$tipoPedido = $pedido['tipoPedido'];
		}}
		else{
			$descricao = "";
			$idPedido = "";
			$tipoPedido = "";
		}
	
	echo form_open("pedido/novoPedido");
	echo form_hidden('idPedido', $idPedido);
	echo inputText("descricao", "Descrição", $descricao);
	$options = array(
		'0'  => 'Selecione',
		'1'  => 'Produtos',
		'2'    => 'Serviços'
	);
	echo inputList("tipoPedido","Tipo Pedido",$options, $tipoPedido);
	echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
	echo form_close();
?>