<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/serviciosController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/vehiculoController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/conductorController.php");
$arrayServicios = array();
$objServi = new serviciosController();
$objVehi = new vehiculoController();
$objCond = new conductorController();
$arrayServicios=$objServi->listaTodosServicios();
?>
<div id="contendor_dinamico_main" >
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Servicios Registrados</h3>
          <br><br><br>
          <div id ="mensaje"></div>
          <div class="box-body">
            <div class="input-group">
              <input type="text" name="table_search" id="table_search" class="form-control input-sm pull-right col-xs-8" style="width: 300px;" placeholder="Buscar . . .">
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default" id="buscar_conductor_main"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <div class="box-tools">
              <a class="btn btn-app" id="agregar_servicio_main"><i class="fa fa-edit"></i>Nuevo Servicio</a>
              <br>
              <br>
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Listados por Estados</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="todos_servicio_listado">TODOS</a></li>
                  <li class="divider"></li>
                  <li><a href="#" id="activos_servicio_listado">ACTIVOS</a></li>
                  <li><a href="#" id="cerrados_servicio_listado">CERRADOS</a></li
                </ul>
              </div>
               &nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="button" id="exportar_excel_servicio_main" class="btn btn-success" value="Exportar a PDF"/>
              &nbsp
              <input type="button" id="exportar_pdf_servicio_main" class="btn btn-success" value="Exportar a EXCEL"/>
            <br><br>
            </div>
            <!-- /.box-header -->
            <div id="conductor_contenedor_dinamico">
              <?php  if(is_null($arrayServicios)){
                echo "<h3 class='box-title'>No hay clientes registrados en la base de datos actual! </h3>";
              }else{
                echo "<table class='table table-hover'>
                <tbody>
                <tr>
                <th>Estado</th>
                <th>Codigo Servicio</th>
                <th>Conductor</th>
                <th>Vehiculo</th>
                <th>Cliente</th>
                <th>Ciudad origen</th>
                <th>Fecha Creacion</th>
                <th>Fecha Fin</th>
                <th colspan='2' >Accion</th>
                </tr>";
                foreach ($arrayServicios as  $clave => $valor) {
                  echo "<tr><td>".$arrayServicios[$clave]->getEstado()."</td>
                  <td >".$arrayServicios[$clave]->getId_servicio()."</td>
                  <td >".$objCond->ConductorId($arrayServicios[$clave]->getId_conductor())->getNombre_conductor()."</td>
                  <td >".$objVehi->vehiculoId($arrayServicios[$clave]->getId_vehiculo())->getPlaca()."</td>
                  <td >".$arrayServicios[$clave]->getId_cliente()."</td>
                  <td >".$arrayServicios[$clave]->getEstado()."</td>
                  <td >".$arrayServicios[$clave]->getFecha_creacion()."</td>
                  <td >".$arrayServicios[$clave]->getFecha_fin()."</td>
                  <td>  <button type='button' id='verServicio' class='btn btn-primary'
                  value='".$arrayServicios[$clave]->getId_servicio()."'>Ver Servico Completo</button>
                  <button type='button' id='verBitacora' class='btn btn-info'
                  value='".$arrayServicios[$clave]->getId_servicio()."'>Bitacora</button>
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
  <script type="text/javascript" src="../assets/js/AdminLTE/servicios.js"></script>
