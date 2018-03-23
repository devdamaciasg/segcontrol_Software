<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src=<?php echo $sesion_foto ?> class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
      <br>
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
  </ul>
</section>
<!-- /.sidebar -->
