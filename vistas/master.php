<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/clienteController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/empleadoController.php");

$sesion=unserialize(urldecode($_GET["array"]));

$rol=$sesion->getId_rol();
$sesion_id=$sesion->getId_usuario();
if(intval($rol) == 1 ){
  $sesion_rol="administrador";
}else{
  if(intval($rol) == 2){
    $sesion_rol="asistente";
  }else{$sesion_rol="cliente";}
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
          <small>Ver 1.0 Alpha </small>
        </h1>
        <div id="smg_panel"></div>



      </section>
        <!-- Main content -->
      <section class="content">
        <div id="contenido"></div>
      </section><!-- /.content -->

    </aside><!-- /.right-side -->
  </div><!-- ./wrapper -->
  <?php require_once("footer.php");?>
</body>
</html>
