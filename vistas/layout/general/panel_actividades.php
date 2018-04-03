<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/empleadoController.php");
 $objEmpleado= new empleadoController();
 $objUsuario= new usuariosController();
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Gestion de Aseguradoras</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search_empleado" id="table_search_empleado" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar . . .">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button class='btn btn-danger' id='actualizar_tabla_empleado' value=""><i class="fa fa-refresh"></i></button>
          <button class='btn btn-warning' id='actualizar_tabla_empleado' value=""><i class="fa  fa-file-text"></i> Crear registro de asguradora</button>

        </div>
      </div>

        <div class="box-body">

          <?php
          $arrayObj = array();
          $arrayObj = $objEmpleado->listaEmpleados();
          if(is_null( $arrayObj) ){
            echo "<span>No hay Empleados Registrados en la base de datos.</span>";
          }else{
            echo "<table class='table table-bordered'>
            <tbody>
            <tr>
            <th>NIT</th>
            <th>Nombre </th>
            <th>Cantidad de Vehiculos</th>
            <th>Accion</th>
            </tr> ";
            // foreach ($arrayObj as $clave => $valor) {
            //   $obj=$objUsuario->usuarioId( $arrayObj[$clave]->getId_usuario() );
            //   $estado = $obj->getEstado();
            //   $id_rol = $obj->getId_rol();
            //   $usuario = $obj->getUsuario();
            //   if(intval($id_rol) == 1){$rol="Administrador";}else{if(intval($id_rol) == 2){$rol="Asistente";}else{$rol="Cliente";}}
            //   echo"<tr>
            //   <td>".$arrayObj[$clave]->getId_empleado()."-".$arrayObj[$clave]->getId_usuario()."</td>
            //   <td>".$estado."</td>
            //   <td>".$rol."</td>
            //   <td>".$usuario."</td>
            //   <td>".$arrayObj[$clave]->getNombre()."</td>
            //   <td>
            //   <button class='btn btn-primary' id='id_usuario' value=".$arrayObj[$clave]->getId_usuario()."><i class='fa fa-search'></i> Ver mas</button>";
            //   if( strcmp($estado,"ACTIVO")==0 ){
            //
            //     echo "&nbsp<button class='btn btn-success' id='desactivar_empleado' value=".$arrayObj[$clave]->getId_usuario()."><i class='fa  fa-exchange'></i> Desactivar</button>";
            //   }else{
            //     echo "&nbsp<button class='btn btn-success' id='activar_empleado' value=".$arrayObj[$clave]->getId_usuario()."><i class='fa  fa-exchange'></i> Activar</button>";}
            //     echo "  </td>
            //     </tr>";
            //   }
              echo "</tbody>
              </table> ";
            }
            ?>
          </div><!-- /.box-body -->
        </div>
      </div>
      <script type="text/javascript" src="../assets/js/AdminLTE/empleado.js"></script>
