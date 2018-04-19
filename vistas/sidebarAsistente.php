<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="../assets/img/avatar3.png" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-center info">
      <p>Bienvenido<br>  <?php echo "".$sesion_nombre ?></p>
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
        <a href="" id="principalAsis">
          <i class="fa fa-bar-chart-o"></i> <span>Principal</span>
        </a>
    </li>
    <li>
      <a href="" id="perfil">
        <i class="ion ion-card"></i> <span>Cuenta</span>
      </a>
    </li>
    <li>
      <a href="" id="menuServicios">
        <i class="fa fa-code-fork"></i> <span>Servicio</span>
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
  </ul>
  <br>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</section>
<!-- /.sidebar -->
