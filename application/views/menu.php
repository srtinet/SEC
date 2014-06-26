<ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
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
    </ul>
  </li>

    </ul>