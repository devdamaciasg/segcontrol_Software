<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(PERSISTENCIA_PATH."usuariosDao.php");
require_once(PERSISTENCIA_PATH."serviciosDao.php");
require_once(PERSISTENCIA_PATH."vehiculoDao.php");
require_once(MODEL_PATH."empleado.php");
require_once(MODEL_PATH."cliente.php");
require_once(MODEL_PATH."servicios.php");
require_once(MODEL_PATH."minuta.php");
require_once(MODEL_PATH."conductor.php");
require_once(MODEL_PATH."vehiculo.php");

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
    $ObjVehiculo=new vehiculoDao();
    return   $ObjVehiculo->listaVehiculo();
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
