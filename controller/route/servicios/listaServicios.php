<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."conductorController.php");
require_once(CONTROLLER_PATH."vehiculoController.php");
require_once(CONTROLLER_PATH."serviciosController.php");

$estado = $_POST['id'];

$arrayServicios = array();

$objVehi = new vehiculoController();
$objCond = new conductorController();
$objServi = new serviciosController();

if(intval($estado) == 1){$arrayServicios=$objServi->listaTodosServicios();
}else{
  if(intval($estado) == 2){$arrayServicios=$objServi->listaTodosServiciosActivos();
  }else{$arrayServicios=$objServi->listaTodosServiciosCerrados();}
}

if(is_null($arrayServicios)){

  echo "<h3 class='box-title'>No hay servicios registrados bajo ese estado </h3>";
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
    <td>  <button type='button' id='verServicio'  name='verServicio' class='btn btn-primary'
    value='".$arrayServicios[$clave]->getId_servicio()."'>Ver </button>
    <button type='button' id='verBitacora' name='verBitacora' class='btn btn-warning'
    value='".$arrayServicios[$clave]->getId_servicio()."'>Bitacora</button>
    </td>
    </tr>";
  }
  echo "</tbody></table>";
}
?>
