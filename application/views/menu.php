  <script type="text/javascript">
  var controller = 'home';
  var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';
  
  function load_data_ajax(){
    $.ajax({
      'url' : base_url + '/' + controller + '/menus',
      'type' : 'POST', //the way you want to send data to your URL

      'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
      var valor = jQuery.parseJSON(data);
      if(data){

        $('#responsabilidade').html(valor.responsabilidadeCont);
        $('#recado').html(valor.recadoCont);
        $('#documento').html(valor.documentoCont);
        $('#ligacao').html(valor.ligacaoCont);
        $('#validacoes').html(valor.validacoesCont);
      }

    }
  });
  }

  window.onload = function(){
    load_data_ajax();
  }
  setInterval(function() { load_data_ajax() }, 300000);

  </script>

  <ul class="nav nav-pills navbar navbar-default">
    <li><a href="#">Home</a></li>
    <?php



    ?>

    <li id="ii"><?php echo anchor("responsabilidade", "Responsabilidades<span id='responsabilidade' class='badge pull-right numerador'></span>"); ?></li>
    <li><?php echo anchor("responsabilidade/validar", "Validações<span id='validacoes' class='badge pull-right numerador'></span>" ); ?></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        Cadastros <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <?php ?>
        <li ><?php echo anchor("usuarios/listar", "Usuario" ); ?></li>
        <li ><?php echo anchor("setor/listar", "Setor" ); ?></li>
        <li ><?php echo anchor("empresa/listar", "Empresa" ); ?></li>
        <li ><?php echo anchor("atividade/listar", "Atividade" ); ?></li>
        <li ><?php echo anchor("documento/listarTipo", "Documento" ); ?></li>

      </ul>
    </li>
    <li><?php echo anchor("recado/listarRecado", "Recado<span id='recado' class='badge pull-right numerador'></span>" ); ?></li>

    <li><?php echo anchor("documento/ver", "Documento<span id='documento' class='badge pull-right numerador'></span>" ); ?></li>
    <li ><?php echo anchor("email/enviarEmail", "Enviar Email" ); ?></li>
    <?php
    $usuario = $this->session->userdata['usuario_logado']['telefonista'];
    if($usuario == 0){ ?>
    <li ><?php echo anchor("ligacao/listar", "Sol. Chamada<span id='ligacao' class='badge pull-right numerador'></span>");?></li>
    <?php } else{ ?>
    <li ><?php echo anchor("ligacao/listarTelefonista", "Sol. Chamada");?></li>
    <?php } ?>
  </ul>
  <div class="container-fluid">
    <div class="row">
