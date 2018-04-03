<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/conductorController.php");
$arrayConductor = array();
$objConductor = new conductorController();
$arrayConductor=$objConductor->listaConductor();
?>
<div id="contendor_dinamico_main" >
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Lista de Conductores Registrados</h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" id="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar . . .">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default" id="buscar_conductor_main"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <button class='btn btn-danger' id='actualizar_tabla_empleado' value=""><i class="fa fa-refresh"></i></button>
          <button class='btn btn-warning' id='actualizar_tabla_empleado' value=""><i class="fa  fa-file-text"></i> Crear nuevo conductor</button>

        </div>
      </div><!-- /.box-header -->
      <div id ="mensaje"></div>
      <div class="box-body">
        <div id="conductor_contenedor_dinamico">
          <?php  if(is_null($arrayConductor)){
            echo "<h3 class='box-title'>No hay clientes registrados en la base de datos actual! </h3>";
          }else{
            echo "<table class='table table-hover'>
            <tbody>
            <tr>
            <th >Identificacion</th>
            <th >Nombre</th>
            <th >Telefono</th>
            <th >Telefono 2</th>
            <th >Telefono 3</th>
            <th colspan='2' >Accion</th>
            </tr>";
            foreach ($arrayConductor as  $clave => $valor) {
              echo "<tr><td>".$arrayConductor[$clave]->getCedula()."</td>
              <td >".$arrayConductor[$clave]->getNombre_conductor()."</td>
              <td >".$arrayConductor[$clave]->getTelefono1()."</td>
              <td >".$arrayConductor[$clave]->getTelefono2()."</td>
              <td >".$arrayConductor[$clave]->getTelefono3()."</td>
              <td>  <button type='button' id='verConductor' class='btn btn-primary'
                             value='".$arrayConductor[$clave]->getId_conductor()."'>Mostrar</button>
                    <button type='button' id='verConductor' class='btn btn-danger'
                                            value='".$arrayConductor[$clave]->getId_conductor()."'>Eliminar</button>
              </td>
            </tr>";
          }
            echo "</tbody></table>";
          }
          ?>
        </div>
      </div><!-- /.box-body -->
    </div>
  </div>

</div>

</div>
<script type="text/javascript" src="../assets/js/AdminLTE/conductor.js"></script>
