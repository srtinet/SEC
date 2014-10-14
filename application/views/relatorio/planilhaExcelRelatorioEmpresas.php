<?php
$nome_arquivo = "planilhaEmpresasSEC";
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename = $nome_arquivo.xls");
header ("Content-Description: PHP Generated Data");
?>
<table>
   <tr>
    <td><strong>Tipo de Empresa</strong></td>
    <td><strong>Enquadramento</strong></td>
    <td><strong>Tributação</strong></td>
    <td><strong>Data Tributação</strong></td>
    <td><strong>Pagamento de Imposto</strong></td>
    <td><strong>Pagador do Imposto</strong></td>
    <td><strong>Ramo de Atividade</strong></td>
    <td><strong>Status da Empresa</strong></td>
    <td><strong>Nº Contmatic</strong></td>
    <td><strong>CNPJ</strong></td>
    <td><strong>Razão Social</strong></td>
    <td><strong>Nome Fantasia</strong></td>
    <td><strong>Matriz/Filial:</strong></td>
    <td><strong>Inscrição Municipal</strong></td>
    <td><strong>Inscrição Estadual</strong></td>
    <td><strong>Telefone</strong></td>
    <td><strong>Telefone Residencial</strong></td>
    <td><strong>Celular</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>CEP</strong></td>
    <td><strong>Tipo de Logradouro</strong></td>
    <td><strong>Logradouro Comercial</strong></td>
    <td><strong>Número</strong></td>
    <td><strong>Complemento</strong></td>
    <td><strong>Bairro</strong></td>
    <td><strong>Município</strong></td>
    <td><strong>UF</strong></td>
    <td><strong>Atividade</strong></td>
    <td><strong>Orgão</strong></td>
    <td><strong>Inicio da Atividade</strong></td>
    <td><strong>Data de Abertura</strong></td>
    <td><strong>CNAE</strong></td>
    <td><strong>email</strong></td>
</tr>
<?php
foreach($empresas as $empresa) : ?>
<tr>
    <?php
    $options = array(
        'Empresário Individual',
        'Sociedade Empresária Limitada',
        'Sociedade Simples Limitada',
        'Sociedade Simples Pura',
        'Associacao Privada',
        'Cooperativa',
        'Entidade Sindical',
        'Empresa Individual de Responsabilidade LTDA',
        'PF',
        'MEI',
        'SIMEI'
        );
    $tipoEmpresa = trata($options, 11, $empresa['tipoEmpresa']);
    ?>
    <td id="tipoEmpresa"><?php echo $tipoEmpresa?></td>
    <?php
    $options = array(
      'Enquadra na condição ME',
      'Enquadra na condição de EPP',
      'Reenquadra na condição de DE ME PARA EPP',
      'Reenquadra na condição DE EPP PARA ME',
      'Desenquadra da condição de ME-EPP',
      'EIRELI'
      );
    $enquadramento = trata($options, 6, $empresa['enquadramento']);
    ?>
    <td><?php echo $enquadramento?></td>
    <?php
    $options = array(
      'Lucro Presumido',
      'Lucro Real',
      'Simples Nacional',
      'Outros'
      );
    $tributacao = trata($options, 4, $empresa['tributacao']);
    ?>
    <td><?php echo $tributacao?></td>
    <td><?php echo $empresa['dataTributacao']?></td>
    <?php
    if($empresa['pagamentoImpostoRenda'] == 0){
        $pagamentoImpostoRenda = "N/A";
    }else{
        $options = array(
            'Trimestral',
            'Mensal'
            );
        $pagamentoImpostoRenda = trata($options, 2, $empresa['pagamentoImpostoRenda']);
    }
    ?>
    <td><?php echo $pagamentoImpostoRenda?></td>
    <?php
    if($empresa['pagadorImposto'] == 0){
        $pagadorImposto = "N/A";
    }else{
        $options = array(
            'Escritório',
            'Cliente'
            );
        $pagadorImposto = trata($options, 2, $empresa['pagadorImposto']);
    }
    ?>
    <td><?php echo $pagadorImposto?></td>
    <?php
    $options = array(
        'Indústria/Comércio',
        'Indústria/Comércio/Servicos',
        'Comércio',
        'Comércio/Servicos',
        'Micro Empresa',
        'ME/Serviços',
        'ME/Industria/Serviços',
        'Prestação de Serviços'
        );
    $ramoAtividade = trata($options, 8, $empresa['ramoAtividade']);
    ?>
    <td><?php echo $ramoAtividade?></td>
    <?php
    $options = array(
        'ABERTA',
        'FECHADA',
        'EM ANDAMENTO',
        'INATIVA',
        'SEM MOVIMENTO',
        'TRANSFERIDA PARA OUTRO ESCRITÓRIO'
        );
    $statusEmpresa = trata($options, 6, $empresa['statusEmpresa']);
    ?>
    <td><?php echo $statusEmpresa?></td>
    <td><?php echo $empresa['nContmatic']?></td>
    <td><?php echo $empresa['cnpj']?></td>
    <td><?php echo $empresa['razaoSocial']?></td>
    <td><?php echo $empresa['nomeFantasia']?></td>
    <?php
    $options = array(
        'FILIAL',
        'MATRIZ'
        );
    $matrizFilial = trata($options, 2, $empresa['matrizFilial']);
    ?>
    <td><?php echo $matrizFilial?></td>
    <td><?php echo $empresa['inscricaoMunicipal']?></td>
    <td><?php echo $empresa['inscricaoEstadual']?></td>
    <td><?php echo $empresa['telefone']?></td>
    <td><?php echo $empresa['telefoneResidencial']?></td>
    <td><?php echo $empresa['celular']?></td>
    <td><?php echo $empresa['email']?></td>
    <td><?php echo $empresa['cep']?></td>
    <td><?php echo $empresa['logradouro']?></td>
    <td><?php echo $empresa['logradouroComercial']?></td>
    <td><?php echo $empresa['numero']?></td>
    <td><?php echo $empresa['complemento']?></td>
    <td><?php echo $empresa['bairro']?></td>
    <td><?php echo $empresa['municipio']?></td>
    <td><?php echo $empresa['uf']?></td>
    <td><?php echo $empresa['atividade']?></td>
    <td><?php echo $empresa['orgao']?></td>
    <td><?php echo $empresa['inicioAtividade']?></td>
    <td><?php echo $empresa['dataAbertura']?></td>
    <td><?php echo $empresa['cnae']?></td>
    <?php
    if($empresa['avisoEmail'] == 0){
        $avisoEmail = "N/A";
    }else{
        $options = array(
            'Sim',
            'Não'
            );
        $avisoEmail = trata($options, 2, $empresa['avisoEmail']);
    }
    ?>
    <td><?php echo $avisoEmail?></td>
</tr>
<?php endforeach ?>
</table>