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
        <h3 class="box-title">Empleados</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar . . .">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div><!-- /.box-header -->
      <div class="box-body">
      <?php
       $arrayObj = array();
       $arrayObj = $objEmpleado->listaEmpleados();
       if(is_null( $arrayObj ){
          echo "<span>No hay Empleados Registrados en la base de datos.</span>";
       }else{
           $arrayObj->listaEmpleados();
           echo "<table class='table table-bordered'>
             <tbody>
             <tr>
               <th># Codigo</th>
               <th>Estado</th>
               <th>Rol</th>
               <th>Usuario</th>
               <th>Nombre</th>
               <th>Accion</th>
            </tr> ";
            foreach ($arrayObj as $clave => $valor) {
             $obj->usuarioId($arrayObj[$clave]->getId_usuario());
             $estado = $obj->getEstado();
             $id_rol = $obj->getId_rol();
             $usuario = $obj->getUsuario();
             if(intval($id_rol) == 1){$rol="Administrador";}else{if(intval($id_rol) == 2){$rol="Asistente";}else{$rol="Cliente";}}
            echo"<tr>
                    <td>".$arrayObj[$clave]->getId_empleado()."</td>
                    <td>".$estado."</td>
                    <td>".$rol."</td>
                    <td>".$usuario."</td>
                    <td>".$arrayObj[$clave]->getNombre()."</td>
                    <td>
                      <button class='btn btn-primary' id='id_usuario' value=".$arrayObj[$clave]->getUsuario().">Ver</button>
                    </td>
                  </tr>";
            }
            echo "  </tbody>
            </table> ";
       }
      ?>
      </div><!-- /.box-body -->
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/empleado.js"></script>
