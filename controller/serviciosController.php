<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(PERSISTENCIA_PATH."usuariosDao.php");
require_once(PERSISTENCIA_PATH."serviciosDao.php");
require_once(MODEL_PATH."empleado.php");
require_once(MODEL_PATH."cliente.php");
require_once(MODEL_PATH."servicios.php");
require_once(MODEL_PATH."minuta.php");
require_once(MODEL_PATH."conductor.php");
require_once(MODEL_PATH."vehiculo.php");

class serviciosController{

  public function registroServicio(servicios $servicios){
    $Objservicios=new serviciosDao();
    return  $Objservicios->registrarServicio($servicios);
  }

  public function actualizarServicio(servicios $servicios){
    $Objservicios=new serviciosDao();
    return  $Objservicios->actualizarServicio($servicios);
  }

  public function serviciosPorCliente($id){
    $Objservicios=new serviciosDao();
    return  $Objservicios->servicioCli($id);
  }

  public function serviciosPorEmpleado($id){
    $Objservicios=new serviciosDao();
    return  $Objservicios->servicioEmp($id);
  }

  public function listaTodosServicios(){
    $Objservicios=new serviciosDao();
    return  $Objservicios->listaServicios();
  }

  public function listaTodosServiciosActivos(){
    $Objservicios=new serviciosDao();
    return  $Objservicios->listaTodosServiciosActivos();
  }

  public function listaTodosServiciosCerrados(){
    $Objservicios=new serviciosDao();
    return  $Objservicios->listaTodosServiciosCerrados();
  }

  public function cerrarServicioActual($id_servicio){
    $Objservicios=new serviciosDao();
    return  $Objservicios->cerrarServicio($id_servicio);
  }


}
?>
