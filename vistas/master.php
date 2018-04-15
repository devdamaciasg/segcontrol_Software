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
            require_once("sidebarAdmin.php");
          }else{
            if(strcmp($sesion_rol,"cliente")==0){
             require_once("sidebarCliente.php");
            }else{
            require_once("sidebarAsistente.php");
            }
          }?>
          <div class="col-md-6">
                              <div class="box box-solid">
                                  <div class="box-header">
                                      <h3 class="box-title">Carousel</h3>
                                  </div><!-- /.box-header -->
                                  <div class="box-body">
                                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                              <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                              <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                          </ol>
                                          <div class="carousel-inner">
                                              <div class="item active">
                                                  <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                                                  <div class="carousel-caption">
                                                      First Slide
                                                  </div>
                                              </div>
                                              <div class="item">
                                                  <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                                                  <div class="carousel-caption">
                                                      Second Slide
                                                  </div>
                                              </div>
                                              <div class="item">
                                                  <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                                                  <div class="carousel-caption">
                                                      Third Slide
                                                  </div>
                                              </div>
                                          </div>
                                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                              <span class="glyphicon glyphicon-chevron-left"></span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                              <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                      </div>
                                  </div><!-- /.box-body -->
                              </div><!-- /.box -->
                          </div>
                          <div class="col-md-6">
                                                      <div class="box box-solid">
                                                          <div class="box-header">
                                                              <h3 class="box-title">Vertical Progress bars</h3>
                                                          </div><!-- /.box-header -->
                                                          <div class="box-body text-center">
                                                              <p>By adding the class <code>.vertical</code> we achieve:</p>
                                                              <div class="progress vertical">
                                                                  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                                                                      <span class="sr-only">40%</span>
                                                                  </div>
                                                              </div>
                                                              <div class="progress vertical">
                                                                  <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                                                                      <span class="sr-only">20%</span>
                                                                  </div>
                                                              </div>
                                                              <div class="progress vertical">
                                                                  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                                                                      <span class="sr-only">60%</span>
                                                                  </div>
                                                              </div>
                                                              <div class="progress vertical">
                                                                  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                                                                      <span class="sr-only">80%</span>
                                                                  </div>
                                                              </div>
                                                          </div><!-- /.box-body -->
                                                      </div><!-- /.box -->
                                                  </div>



        </div>
      </section><!-- /.content -->

    </aside><!-- /.right-side -->
  </div><!-- ./wrapper -->
  <?php require_once("footer.php");?>
</body>
</html>
