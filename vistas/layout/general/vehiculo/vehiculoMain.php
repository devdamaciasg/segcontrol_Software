<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."vehiculoController.php");
require_once(CONTROLLER_PATH."clienteController.php");
$objVehiculo= new vehiculoController();
$objCliente= new clienteController();
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Vehiculos</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search_vehiculo" id="table_search_vehiculo" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar . . .">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button class='btn btn-danger' id='actualizar_tabla_vehiculo' value=""><i class="fa fa-refresh"></i></button>&nbsp
          <button class='btn btn-warning' id='crear_vehiculo' value=""><i class="fa fa-save"></i> Crear conductor</button>

        </div>
      </div>

      <div class="box-body">

        <?php
        $arrayObj = array();
        $arrayObj = $objVehiculo->listaVehiculos();
        if(is_null( $arrayObj) ){
          echo "<span>No hay Vehiculos Registrados en la base de datos.</span>";
        }else{
          echo "<table class='table table-bordered'>
          <tbody>
          <tr>
          <th># ID</th>
          <th>Placa</th>
          <th>Marca</th>
          <th>Color</th>
          <th>Trailer</th>
          <th>Accion</th>
          </tr> ";

          foreach ($arrayObj as $clave => $valor) {
            // $obj=$objCliente->clienteId( $arrayObj[$clave]->getId_cliente() );
            // $cliente = $obj->getNombre();
            echo"<tr>
            <td>".$arrayObj[$clave]->getId_vehiculo()." ".$arrayObj[$clave]->getId_cliente()."</td>
            <td>".$arrayObj[$clave]->getPlaca()."</td>
            <td>".$arrayObj[$clave]->getMarca()."</td>
            <td>".$arrayObj[$clave]->getColor()."</td>
            <td>".$arrayObj[$clave]->getN_trailer()."</td>
            <td>
            <button class='btn btn-primary' id='verVehiculo' value=".$arrayObj[$clave]->getId_vehiculo()."><i class='fa fa-search'></i> Ver mas</button>
            </td></tbody>
            </table> ";
          }
        }
        ?>
      </div><!-- /.box-body -->
    </div>
  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/vehiculo.js"></script>
