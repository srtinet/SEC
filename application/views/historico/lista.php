<h1>Histórico de Alterações em Empresa</h1>

<br/>
<br/>
<table class="table table-striped table-hover table-responsive">
	<thead>
		<tr>
			<th>Usuário</th>
			<th>Data da Modificação</th>
			<th>Empresa</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($historicos as $historico):?>
		<tr>
			<td><?php  echo $historico['nome'];  ?> </td>
			<td><?php  echo dataMysqlParaPtBr($historico['dataModificacao']);  ?> </td>
			<td><?php  echo $historico['razaoSocial'];  ?> </td>
			<?php
			switch ($historico['acao']) {
				case 1:?>
				<td>Criar</td>
				<?php break;
				case 2:?>
				<td>Modificar</td>
				<?php break;
				case 3:?>
				<td>Excluir</td>
				<?php break;
			}
			?>
<!-- 


			<?php
			if($historico['acao'] == 1){ ?>
			<td>Criar</td>
			<?php } elseif($historico['acao'] == 2) { ?>
			<td>Modificar</td>
			<?php } else { ?>
			<td>Excluir</td>
			<?php } ?> -->
		</tr>

		<?php 
		endforeach;

		?> </tbody>
	</table>
