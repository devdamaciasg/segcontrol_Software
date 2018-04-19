<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
require_once(CONTROLLER_PATH."clienteController.php");
require_once(CONTROLLER_PATH."empleadoController.php");

$sesion=unserialize(urldecode($_GET["array"]));

$rol=$sesion->getId_rol();
$sesion_id=$sesion->getId_usuario();

if(intval($rol)==1){
  $sesion_rol="administrador";
  $ConEmp = new EmpleadoController();
  $obj = $ConEmp->empleadoIdUsuario($sesion_id);

  $sesion_foto=$obj->getFoto();
  $sesion_nombre=$obj->getNombre();
}else{
  if(intval($rol)==2){
    $sesion_rol="asistente";
    $ConEmp = new EmpleadoController();
    $obj = $ConEmp->empleadoIdUsuario($sesion_id);
    $sesion_foto=$obj->getFoto();
    $sesion_nombre=$obj->getNombre();

  }else{
    $sesion_rol="cliente";
    $ConCli = new clienteController();
    $obj = $ConCli->clienteIdUsuario($sesion_id);
    $sesion_foto="";
    $sesion_nombre=$obj->getNombre();
  }
}

?>
<!DOCTYPE html>
<html>
<?php require_once("head.php");?>
<body class="skin-black">
  <input id="sesionHidden" name="sesionHidden" type="hidden" value="<?php echo $sesion_id ?>" />
  <input id="rolHidden" name="rolHidden" type="hidden" value="<?php echo $sesion_rol ?>" />
  <?php require_once("topbar.php");?>
  <div  id="app" class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php
      if(strcmp($sesion_rol,"administrador")==0){
        require_once("sidebarAdmin.php");
      }else{
        if(strcmp($sesion_rol,"cliente")==0){
          require_once("sidebarCliente.php");
        }else{
          require_once("sidebarAsistente.php");
        }
      }?>
      <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
      <!-- Content Header (Page header) -->-
      <section class="content-header">
        <h1>
          PANEL PRINCIPAL
          <small>Ver 1.5 Beta </small>
        </h1>
        <br><br>
        <div class="alert alert-info alert-dismissable">
          <i class="fa fa-info"></i>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <b>Mensaje de Bienvenida </b>esto es una prueba de mensaje de bienvendidad peude ser cambiado desde la opcion<br>
          administrador.</b>
        </div>
        <div id="smg_panel"></div>
      </section>
      <!-- Main content -->
      <section class="content">
        <div id="contenido"><?php
        if(strcmp($sesion_rol,"administrador")==0){
          include_once(VISTAS_PATH."administrador.php");
        }else{
          if(strcmp($sesion_rol,"cliente")==0){
            include_once("sidebarCliente.php");
          }else{
            include_once("sidebarAsistente.php");
          }
        }?>
      </div>
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php
if(strcmp($sesion_rol,"administrador")==0){
  echo "<script type='text/javascript' src='../assets/js/AdminLTE/administrador/menu.js'></script>";
}else{
  if(strcmp($sesion_rol,"cliente")==0){
    echo "<script type='text/javascript' src='../assets/js/AdminLTE/cliente/menu.js'></script>";
  }else{
    echo "<script type='text/javascript' src='../assets/js/AdminLTE/empleado/menu.js'></script>";
  }
}
require_once("footer.php");?>
</body>
</html>
