<?php
if($fornecedores){
	foreach($fornecedores as $fornecedor){
		$idFornecedor = $fornecedor['idFornecedor'];
		$pontuacaoInicial = $fornecedor['pontuacaoInicial'];
		$pontuacaoMinima = $fornecedor['pontuacaoMinima'];
		$frequenciaAvaliacao = $fornecedor['frequenciaAvaliacao'];
		$cep = $fornecedor['cep'];
		$razaoSocial = $fornecedor['razaoSocial'];
		$logradouro = $fornecedor['logradouro'];
		$logradouroComercial = $fornecedor['logradouroComercial'];
		$numero = $fornecedor['numero'];
		$complemento = $fornecedor['complemento'];
		$bairro = $fornecedor['bairro'];
		$municipio = $fornecedor['municipio'];
		$uf = $fornecedor['uf'];
		$telefone = $fornecedor['telefone'];
		$email = $fornecedor['email'];
	}
}else{
	$idFornecedor = "";
	$pontuacaoInicial = "";
	$pontuacaoMinima = "";
	$frequenciaAvaliacao = "";
	$cep = "";
	$razaoSocial = "";
	$logradouro = "";
	$logradouroComercial = "";
	$numero = "";
	$complemento = "";
	$bairro = "";
	$municipio = "";
	$uf = "";
	$telefone = "";
	$email = "";
}?>
<div class="row">
	<div class="col-lg-8">
		<h3>Cadastro de Fornecedores</h3>
	</div>
	<div class="col-lg-4">
		<br/>
		<?php echo anchor("fornecedor/listar/","Voltar", array("class" => "btn btn-danger"));  ?>
	</div>
</div>
<?php
echo form_open("fornecedor/cadastrar");
echo form_hidden('idFornecedor', $idFornecedor);
echo inputText("razaoSocial","Razão Social",$razaoSocial);
echo inputTextCep("cep","CEP",$cep);
echo inputText("logradouro","Logradouro",$logradouro);
echo inputText("logradouroComercial","Logradouro Comercial",$logradouroComercial);
echo inputText("numero","Número",$numero);
echo inputText("complemento","Complemento",$complemento);
echo inputText("bairro","Bairro",$bairro);
echo inputText("municipio","Município",$municipio);
echo inputText("uf","UF",$uf);
echo inputText("telefone","Telefone",$telefone);
echo inputText("email","E-mail",$email);
echo inputText("pontuacaoInicial","Pontuação Inicial",$pontuacaoInicial);
echo inputText("pontuacaoMinima","Pontuação Mínima",$pontuacaoMinima);
echo inputText("frequenciaAvaliacao","Frequência Avaliação",$frequenciaAvaliacao);

echo form_button(array("class"=>"btn btn-primary","content"=>"Salvar","type"=>"submit"));
echo form_close();
