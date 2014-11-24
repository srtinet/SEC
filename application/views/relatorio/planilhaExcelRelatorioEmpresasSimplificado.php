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
		<td><strong>Contmatic - Empresa</strong></td>
		<td><strong>CNPJ</strong></td>
	</tr>
	<?php
	$nao = "Não Possui";
	$nao = utf8_decode($nao);
	foreach($empresas as $empresa) : ?>
	<tr>
		<td><?php echo $empresa['nContmatic']." - ".utf8_decode($empresa['razaoSocial'])?></td>
		<?php
		if($empresa['cnpj'] == ""){ ?>
		<td><?php echo $nao?></td>	
		<?php }else{ ?>
		<td><?php echo $empresa['cnpj']?></td>
		<?php } ?>
		</tr>
<?php endforeach ?>
</table>