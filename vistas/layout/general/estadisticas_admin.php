<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
$objController=new usuariosController();
?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>
          <?php echo $objController->Nempleados(); ?>
        </h3>
        <p>
            Empleados Registrados
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" id="empleadosVista" class="small-box-footer">
        Acceder <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>
        <?php echo $objController->Nclientes();?>
        </h3>
        <p>
          Clientes Registrados
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-person-stalker"></i>
      </div>
      <a href="#" id="clientesV" class="small-box-footer">
        Acceder <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>
          &nbsp;
        </h3>
        <p>
          Perfil Usuario
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-card"></i>
      </div>
      <a href="#" id="perfil" class="small-box-footer">
        Acceder <i class="fa fa-arrow-circle-right"></i>
      </a>
    </div>
  </div><!-- ./col -->


<!-- top row -->
<div class="row">
  <div class="col-xs-12 connectedSortable">

  </div><!-- /.col -->
</div>
