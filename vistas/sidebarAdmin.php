<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src=<?php echo $sesion_foto ?> class="img-circle" alt="User Image" />
    </div>
    <div class="pull-center info">
      <p>Bienvenido<br> <?php echo "".$sesion_nombre ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="active">
      <a>
        Menu <span><?php echo $sesion_rol ?></span>
      </a>
    </li>
    <li>
      <a href="" id="principalAdmin">
        <i class="fa fa-bar-chart-o"></i> <span>Principal</span>
      </a>
    </li>
    <li>
      <a href="" id="menuUsuarios">
        <i class="fa fa-users"></i> <span>Usuarios</span>
      </a>
    </li>
    <li>
      <a href="" id="menuActividades">
        <i class="fa fa-keyboard-o"></i> <span>Actividades Colaboradores</span>
      </a>
    </li>
    <li>
      <a href="" id="menuEmpresas">
        <i class="fa fa-truck"></i> <span>Empresas</span>
      </a>
    </li>
    <li>
      <a href="" id="menuServicios">
        <i class="fa fa-code-fork"></i> <span>Servicios</span>
      </a>
    </li>
    <li>
      <a href="" id="menuConfiguracion">
        <i class="fa fa-gears"></i> <span>Configuracion</span>
      </a>
    </li>
    <li class="active">
      <a>
      Accesos Directos
      </a>
    </li>
    <li>
      <a href="https://p3plcpnl0781.prod.phx3.secureserver.net:2096/logout/?locale=es" >
        <i class="fa fa-envelope"></i> <span>Web Mail </span>
      </a>
    </li>
    <li>
      <a href="http://www.segcontrol.com.co/" >
        <i class="fa fa-globe"></i> <span>Sitio Web</span>
      </a>
    </li>
    <li>
      <a href="http://segriongps.com/" >
        <i class="fa fa-globe"></i> <span>
          Plataforma de trazabilidad</span>
      </a>
    </li>
  </ul>
  <br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</section>
<!-- /.sidebar -->
