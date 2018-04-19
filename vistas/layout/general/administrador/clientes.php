<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
$objController=new usuariosController();
$arrayObj=$objController->cargarListaCliente(0);
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Clientes </h3>
        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="table_search" id="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Buscar">
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>

      </div><!-- /.box-header -->
      <div id ="men"></div>
      <div class="box-tools">
      <input type="submit" id="modal_agregar" class="btn btn-success" value="Agregar Cliente Nuevo"/>
      </div>
      <div class="box-body">

        <div id="tabla_dinamica">
          <?php  if(is_null($arrayObj)){
            echo "<h3 class='box-title'>No hay clientes registrados en la base de datos actual! </h3>";
          }else{
            echo "<table class='table table-hover'>
            <tbody>
            <tr>
            <th style='width: 20px'>Codigo Cliente</th>
            <th >Razon social</th>
            <th >Nombre</th>
            <th >rol de usuario</th>
            <th >Estado</th>
            <th colspan='2' >Accion</th>
            </tr>";
            foreach ($arrayObj as $clave => $valor) {
              echo "<tr><td style='width: 20px'>".$arrayObj[$clave]->getId_empleado()."</td>
              <td >".$arrayObj[$clave]->getNombre()."</td>
              <td >".$arrayObj[$clave]->getRazon_social()."</td>";
              if( intval($arrayObj[$clave]->getId_rol())==1 ){
                echo "<td  >ADMINISTRADOR</td>";
              }if( intval($arrayObj[$clave]->getId_rol())==2 ){
                echo "<td >ASISTENTE</td>";
              }else{
                echo "<td >CLIENTE</td>";
              }
            echo "<td >".$arrayObj[$clave]->getEstado()."</td>
            <td>  <button type='button' id='ver' class='btn btn-primary'  value='".$arrayObj[$clave]->getId_empleado()."' value='1'>Mostrar</button></td>
            </tr>";
          }
            echo "</tbody></table>";
          }
          ?>
        </div>
      </div><!-- /.box-body -->
    </div>
  </div>
  <div id="ModalCliente" class="modal fade" role="dialog">
    <div id="modal_dinamico">

    </div>
  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/cliente.js"></script>
