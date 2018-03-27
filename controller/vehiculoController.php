<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/vehiculoDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");

class vehiculoController{

  public function registrarVehiculo(vehiculo $vehiculo){
    $Objminuta=new vehiculoDao();
    return $Objminuta->registrarMinuta($minuta);
  }

  public function  actualizarVehiculo(vehiculo $vehiculo){
    $Objminuta=new vehiculoDao();
    return $Objminuta->actualizarMinuta($minuta);
  }

  public function listaVehiculos(){
    $Objminuta=new vehiculoDao();
    return $Objminuta->listaVehiculo();
  }

  public function vehiculoId($id_vehiculo){
    $Objminuta=new vehiculoDao();
    return $Objminuta->listaVehiculoId($id_vehiculo);
  }

  public function vehiculosPorCliente($id_cliente){
    $Objminuta=new vehiculoDao();
    return $Objminuta->listaVehiculoCli($id_cliente);
  }




}
?>
