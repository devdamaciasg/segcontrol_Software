<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicio.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");

class minutaController{

  public function registrarMinuta(minuta $minuta){
    $Objminuta=new minutaDao();
    return $Objminuta->registrarMinuta($minuta);
  }

  public function actualizarMinuta(minuta $minuta){
    $Objminuta=new minutaDao();
    return $Objminuta->actualizarMinuta($minuta);
  }

  public function listaMinutas(){
    $Objminuta=new minutaDao();
    return $Objminuta->listaGeneralMinuta();
  }

  public function minutasPorEmpleado($id_empleado){
    $Objminuta=new minutaDao();
    return $Objminuta->listaMinutaEm($id_empleado);
  }

  public function minutasPorServicios($id_servicio){
    $Objminuta=new minutaDao();
    return $Objminuta->listaMinutaId($id_servicio);
  }




}
?>
