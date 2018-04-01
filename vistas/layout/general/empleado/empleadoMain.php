<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/empleadoController.php");
$objEmpleado= new empleadoController();
$objUsuario= new usuariosController();
$objArrayEmpleado=$objEmpleado->listaEmpleados();
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
          <tbody>
          <tr>
            <th># Codigo</th>
            <th>Estado</th>
            <th>Rol</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Accion</th>
          </tr>
          <?php
            foreach ($objArrayEmpleado as $clave => $valor) {

             $estado =$objUsuario->getEstado();
             $id_rol=$objUsuario->getId_rol();
             $usuario=$objUsuario->getUsuario();
             if(intval($id_rol) == 1){
               $rol="Administrador";
             }else{
               if(intval($id_rol) == 2){
               $rol="Asistente";
               }else{
                $rol="Cliente";
               }
             }
            echo"<tr>
                    <td>".$objArrayEmpleado[$clave]->getId_empleado()."</td>
                    <td>".$estado."</td>
                    <td>".$rol."</td>
                    <td>".$usuario."</td>
                    <td>".$objArrayEmpleado[$clave]->getNombre()."</td>
                    <td>
                      <button class='btn btn-primary' id='id_usuario' value=".$objArrayEmpleado[$clave]->getUsuario().">Ver</button>
                    </td>
                  </tr>";
            }
           ?>
        </tbody></table>
      </div><!-- /.box-body -->
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/empleado.js"></script>
