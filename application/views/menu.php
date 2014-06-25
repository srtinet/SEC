<ul class="nav nav-pills">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Cadastros <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
     <li class="active"><?php echo anchor("usuarios/listar", "Usuario" ); ?></li>
     <li class="active"><?php echo anchor("setor/listar", "Setor" ); ?></li>
    </ul>
  </li>

    </ul>