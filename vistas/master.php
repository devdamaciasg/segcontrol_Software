<?php
$sesion=unserialize($_GET["array"]);
$sesion_nombre=$sesion['nombre'];
$sesion_rol=$sesion['rol'];
$sesion_tipo=$sesion['id_sesion_tipo'];
$sesion_id=$sesion['id_usuario'];
$sesion_estado=$sesion['estado'];
$sesion_foto=$sesion['foto'];
$sesion_clave=$sesion['clave'];
?>
<!DOCTYPE html>
<html>
<?php require_once("head.php");?>
<body class="skin-black">
  <input id="sesionHidden" name="sesionHidden" type="hidden" value="<?php echo $sesion_id ?>" />
  <input id="rolHidden" name="rolHidden" type="hidden" value="<?php echo $sesion_rol ?>" />
  <input id="estadoHidden" name="estadoHidden" type="hidden" value="<?php echo $sesion_estado ?>" />
  <input id="usuarioHidden" name="usuarioHidden" type="hidden" value="<?php echo $sesion_nombre ?>" />
  <input id="claveHidden" name="claveHidden" type="hidden" value="<?php echo $sesion_clave ?>" />

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
