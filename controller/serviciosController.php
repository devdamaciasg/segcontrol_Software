<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicio.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");

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

  public function cerrarServicioActual($id_servicio){
    $Objservicios=new serviciosDao();
    return  $Objservicios->cerrarServicio($id_servicio);
  }


}
?>
