</div>
</div>

	<footer class="jumbotron">
		<h5>© 2014 SEC - Todos os direitos reservados | Design by SRTI |</h5>
	</footer>
</div>



<!-- jQuery -->

<script type="text/javascript" src="<?php echo base_url("js/jquery.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/funcoes.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/bootstrap-datetimepicker.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/jquery.dataTables.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/dataTables.bootstrap.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/bootstrap-datetimepicker.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("js/bootstrap-datetimepicker.pt-BR.js")?>"></script>
<script>
$(document).ready(function() {
	$('.table-hover').dataTable( {
		"language": {
			"lengthMenu": "Exibir _MENU_",
			"zeroRecords": "Nenhum Registro",
			"info": "Exibindo _PAGE_ de _PAGES_",
			"search":         "Pesquisar: ",
			"infoEmpty": "Nenhum Registro",
			"infoFiltered": "(filtrando _MAX_ registros)",
			"paginate": {
				"first":      "Primeira",
				"last":       "Última",
				"next":       "Pŕoxima",
				"previous":   "Anterior"
			}
		}
	} );
} );
</script>
<script type="text/javascript">
$(function() {
	$('#datepicker, .picker').datetimepicker({
		language: 'pt-BR',
		pickTime: false
	});
});
</script>
<script type="text/javascript">


</script>
</body>
</html>