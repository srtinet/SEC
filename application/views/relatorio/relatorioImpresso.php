
<?php 
foreach ($empresas as $empresa) {
}
?>
<script>

// var idEmpresa = <?php echo $empresa['idEmpresa']?>;

// function mudaDados(idEmpresa){
//     		$('#idEmpresa').text();
//     		dataTipoEmpresa = $('#tipoEmpresa').text();
//     		dataEnquadramento = $('#enquadramento').text();
//     		dataTributacao = $('#tributacao').text();
//     		dataDataTributacao = $('#dataTributacao').text();
//     		dataPagamentoImpostoRenda = $('#pagamentoImpostoRenda').text();
//     		dataFormaPagamento = $('#formaPagamento').text();
//     		dataPagadorImposto = $('#pagadorImposto').text();
//     		dataRamoAtividade = $('#ramoAtividade').text();
//     		dataStatusEmpresa = $('#statusEmpresa').text();
//     		dataMatrizFilial = $('#matrizFilial').text();
//             dataAvisoEmail = $('#avisoEmail').text();

//     		arrayTipoEmpresa = ['Empresário Individual', 'Sociedade Empresária Limitada', 'Sociedade Simples Limitada','Sociedade Simples Pura','Associação Privada','Cooperativa','Entidade Sindical','Empresa Individual de Responsabilidade LTDA','PF','MEI','SIMEI'];

//     		arrayEnquadramento = ['Enquadra na condição ME', 'Enquadra na condição de EPP', 'Reenquadra na condição de DE ME PARA EPP','Reenquadra na condição DE EPP PARA ME','Desenquadra da condição de ME-EPP','EIRELI'];

//     		arrayTributacao = ['Selecione','Lucro Presumido','Lucro Real','Simples Nacional','Outros'];

//     		arrayPagamentoImpostoRenda = ['Selecione','Trimestral','Mensal'];

//     		arrayFormaPagamento = [ 'Selecione','Cota única','Três Parcelas'];

//     		arrayPagadorImposto = ['Selecione','Escritório','Cliente'];

//     		arrayRamoAtividade = ['Indústria/Comércio','Indústria/Comércio/Servicos','Comércio','Comércio/Servicos','Micro Empresa','ME/Serviços','ME/Industria/Serviços','Prestação de Serviços'];

//     		arrayStatusEmpresa = ['ABERTA','FECHADA','EM ANDAMENTO','INATIVA','SEM MOVIMENTO','TRANSFERIDA PARA OUTRO ESCRITÓRIO'];

//     		arrayMatrizFilial = ['FILIAL','MATRIZ'];

//     		arrayAvisoEmail = [ 'Selecione','Sim','Não'];

//     		tipoEmpresa = trataInfo(arrayTipoEmpresa, dataTipoEmpresa);
//     		enquadramento = trataInfo(arrayEnquadramento, dataEnquadramento);
//     		tributacao = trataInfo(arrayTributacao, dataTributacao);
//     		pagamentoImpostoRenda = trataInfo(arrayPagamentoImpostoRenda, dataPagamentoImpostoRenda);
//     		formaPagamento = trataInfo(arrayFormaPagamento, dataFormaPagamento);
//     		pagadorImposto = trataInfo(arrayPagadorImposto, dataPagadorImposto);
//     		ramoAtividade = trataInfo(arrayRamoAtividade, dataRamoAtividade);
//     		statusEmpresa = trataInfo(arrayStatusEmpresa, dataStatusEmpresa);
//     		matrizFilial = trataInfo(arrayMatrizFilial, dataMatrizFilial);
//     		avisoEmail = trataInfo(arrayAvisoEmail, dataAvisoEmail);



//     		$('#idEmpresa').html(idEmpresa);
//     		$('#tipoEmpresa').html(tipoEmpresa);
//     		$('#enquadramento').html(enquadramento);
//     		$('#tributacao').html(tributacao);
//     		$('#pagamentoImpostoRenda').html(pagamentoImpostoRenda);
//     		$('#formaPagamento').html(formaPagamento);
//     		$('#pagadorImposto').html(pagadorImposto);
//     		$('#ramoAtividade').html(ramoAtividade);
//     		$('#statusEmpresa').html(statusEmpresa);
//     		$('#matrizFilial').html(matrizFilial);
//             $('#avisoEmail').html(dataAvisoEmail);
// }

// window.onload = function(){
// 	mudaDados(idEmpresa);
// };
// </script>
<div class="col-md-10 col-md-offset-1">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td colspan="3">
					<img  width="900px" src="<?php echo base_url('img/logo_ras.jpg')  ?>">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<h1>Relatório Empresas</h1>
				</td>
			</tr>
		<!-- 	<tr>
				<th colspan="2">
					<h3><?php echo $empresa['razaoSocial']; ?></h3>
				</th>
			</tr> -->
			<tr>
				<th>
					<p>Empresa</p>
				</th>
				<th>
					<p>CNPJ</p>
				</th>
				<th>
					<p>CONTIMATIC</p>
				</th>
			</tr>
			<?php
				foreach ($empresas as $empresa) {
			?>

			<tr>
				<td id="razaoSocial">
					<?php echo $empresa['razaoSocial']; ?>
				</td>
				<td id="cnpj">
					<?php echo $empresa['cnpj']; ?>
				</td>
				<td id="nContamatic">
					<?php echo $empresa['nContmatic']; ?>
				</td>
			</tr>
			<?php }?>
				<!-- <td id="tipoEmpresa"> -->
					<!-- <?php echo $empresa['tipoEmpresa']; ?> -->
				<!-- </td> -->

<!-- 			<tr>
				<th>
					<p>Enquadramento</p>
				</th>
				<td id="enquadramento">
					<?php echo $empresa['enquadramento']; ?>
				</td>
			</tr> -->
			<!-- <tr>
				<th>
					<p>Tributação</p>
				</th>
				<td id="tributacao">
					<?php echo $empresa['tributacao']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Data da Tributação</p>
				</th>
				<td id="dataTributacao">
					<?php echo $empresa['dataTributacao']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Pagamento de Imposto de Renda</p>
				</th>
				<td id="pagamentoImpostoRenda">
					<?php echo $empresa['pagamentoImpostoRenda']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Forma de Pagamento</p>
				</th>
				<td id="formaPagamento">
					<?php echo $empresa['formaPagamento']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Pagador Imposto</p>
				</th>
				<td id="pagadorImposto">
					<?php echo $empresa['pagadorImposto']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Ramo de Atividade</p>
				</th>
				<td id="ramoAtividade">
					<?php echo $empresa['ramoAtividade']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Status da Empresa</p>
				</th>
				<td id="statusEmpresa">
					<?php echo $empresa['statusEmpresa']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>CNPJ</p>
				</th>
				<td id="cnpj">
					<?php echo $empresa['cnpj']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Nome Fantasia</p>
				</th>
				<td id="nomeFantasia">
					<?php echo $empresa['nomeFantasia']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Razão Social</p>
				</th>
				<td id="razaoSocial">
					<?php echo $empresa['razaoSocial']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Nº Contmatic</p>
				</th>
				<td id="nContmatic">
					<?php echo $empresa['nContmatic']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Matriz/Filial</p>
				</th>
				<td id="matrizFilial">
					<?php echo $empresa['matrizFilial']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Inscrição Estadual</p>
				</th>
				<td id="inscricaoEstadual">
					<?php echo $empresa['inscricaoEstadual']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Inscrição Municipal</p>
				</th>
				<td id="inscricaoMunicipal">
					<?php echo $empresa['inscricaoMunicipal']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Telefone</p>
				</th>
				<td id="telefone">
					<?php echo $empresa['telefone']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Telefone Residencial</p>
				</th>
				<td id="telefoneResidencial">
					<?php echo $empresa['telefoneResidencial']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Celular</p>
				</th>
				<td id="celular">
					<?php echo $empresa['celular']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Email</p>
				</th>
				<td id="email">
					<?php echo $empresa['email']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>CEP</p>
				</th>
				<td id="cep">
					<?php echo $empresa['cep']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Logradouro</p>
				</th>
				<td id="logradouro">
					<?php echo $empresa['logradouro']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Logradouro Comercial</p>
				</th>
				<td id="logradouroComercial">
					<?php echo $empresa['logradouroComercial']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Número</p>
				</th>
				<td id="numero">
					<?php echo $empresa['numero']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Complemento</p>
				</th>
				<td id="complemento">
					<?php echo $empresa['complemento']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Bairro</p>
				</th>
				<td id="bairro">
					<?php echo $empresa['bairro']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Bairro</p>
				</th>
				<td id="bairro">
					<?php echo $empresa['bairro']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Municipio</p>
				</th>
				<td id="municipio">
					<?php echo $empresa['municipio']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>UF</p>
				</th>
				<td id="uf">
					<?php echo $empresa['uf']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Atividade</p>
				</th>
				<td id="atividade">
					<?php echo $empresa['atividade']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Orgão</p>
				</th>
				<td id="orgao">
					<?php echo $empresa['orgao']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Inicío de Atividade</p>
				</th>
				<td id="inicioAtividade">
					<?php echo $empresa['inicioAtividade']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Data de Abertura</p>
				</th>
				<td id="dataAbertura">
					<?php echo $empresa['dataAbertura']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>CNAE</p>
				</th>
				<td id="cnae">
					<?php echo $empresa['cnae']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Código CETESB</p>
				</th>
				<td id="codCetesb">
					<?php echo $empresa['codCetesb']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Código Vig. Sanitária</p>
				</th>
				<td id="codVigilancia">
					<?php echo $empresa['codVigilancia']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Cod.Cons.Regional</p>
				</th>
				<td id="codConselhoRegional">
					<?php echo $empresa['codConselhoRegional']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Cod.JUCESP</p>
				</th>
				<td id="codJucesp">
					<?php echo $empresa['codJucesp']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Cod. Alv. Bombeiro</p>
				</th>
				<td id="codAlvaraBombeiro">
					<?php echo $empresa['codAlvaraBombeiro']; ?>
				</td>
			</tr>
			<tr>
				<th>
					<p>Aviso de Email</p>
				</th>
				<td id="avisoEmail">
					<?php echo $empresa['avisoEmail']; ?>
				</td>
			</tr> -->
		</tbody>
		</tbody>
	</table>
</div>