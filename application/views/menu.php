<ul class="nav nav-pills navbar navbar-default">
  <li><a href="#">Home</a></li>
   <li><?php echo anchor("responsabilidade", "Responsabilidade" ); ?></li>
      <li><?php echo anchor("responsabilidade/validar", "Validações" ); ?></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Cadastros <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
      <?php //muda kelverty ?>
      <li ><?php echo anchor("usuarios/listar", "Usuario" ); ?></li>
      <li ><?php echo anchor("setor/listar", "Setor" ); ?></li>
      <li ><?php echo anchor("empresa/listar", "Empresa" ); ?></li>
      <li ><?php echo anchor("atividade/listar", "Atividade" ); ?></li>
        <li ><?php echo anchor("documento/listarTipo", "Documento" ); ?></li>

      
    </ul>
  </li>
  <li><?php echo anchor("recado/listarRecado", "Recado" ); ?></li>

  <li><?php echo anchor("documento/ver", "Recado" ); ?></li>
  <?php
    $usuario = $this->session->userdata['usuario_logado']['telefonista'];
    if($usuario == 0){ ?>
      <li ><?php echo anchor("ligacao/listar", "Sol. Chamada");?></li>
    <?php } else{ ?>
      <li ><?php echo anchor("ligacao/listarTelefonista", "Sol. Chamada");?></li>
    <?php } ?>
</ul>
<div class="container-fluid">
    <div class="row">
