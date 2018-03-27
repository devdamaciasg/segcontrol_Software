<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/conductorDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");

class conductorController{

  public function registrarConductor(conductor $conductor){
    $Objconductor=new conductorDao();
    return $Objconductor->registrarConductor($conductor);
  }

  public function actualizarConductor(conductor $conductor){
    $Objconductor=new conductorDao();
    return $Objconductor->actualizarConductor($conductor);
  }

  public function listaConductor(){
    $Objconductor=new conductorDao();
    return $Objconductor->listaConductor();
  }

  public function ConductorId($id_conductor){
    $Objconductor=new conductorDao();
    return $Objconductor->listaConductorId($id_conductor);
  }




}
?>
