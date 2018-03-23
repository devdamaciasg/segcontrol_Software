<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
// //var get....
// $sesion=$_GET["sesion"];
// $rol=$_GET["rol"];
// $usuario=$_GET["usuario"];
// $clave=$_GET["clave"];
// $estado=$_GET["estado"];
// ///

//
// $objController=new usuariosController();
// $arrayObj=$objController->PerfilEmpleado($sesion);
?>

<div class="row">
  <div class="col-md-12">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Empleados</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->

      <div class="box-body">
        <table class="table table-bordered">
          <tbody><tr>
            <th style="width: 10px">#</th>
            <th>Task</th>
            <th>Progress</th>
            <th style="width: 40px">Label</th>
          </tr>
          <tr>
            <td>1.</td>
            <td>Update software</td>
            <td>
              <div class="progress xs">
                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
              </div>
            </td>
            <td><span class="badge bg-red">55%</span></td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Clean database</td>
            <td>
              <div class="progress xs">
                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
              </div>
            </td>
            <td><span class="badge bg-yellow">70%</span></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Cron job running</td>
            <td>
              <div class="progress xs progress-striped active">
                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
              </div>
            </td>
            <td><span class="badge bg-light-blue">30%</span></td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Fix and squish bugs</td>
            <td>
              <div class="progress xs progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
              </div>
            </td>
            <td><span class="badge bg-green">90%</span></td>
          </tr>
        </tbody></table>
      </div><!-- /.box-body -->
      <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/empleado.js"></script>
