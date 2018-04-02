<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/empleadoDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");

class empleadoController{

  public function registrarEmpleado(empleado $empleado){
    $ObjEmpleado=new empleadoDao();
    return   $ObjEmpleado->registrarEmpleado($empleado);
  }

  public function actualizarEmpleado(empleado $empleado){
    $ObjEmpleado=new empleadoDao();
    return   $ObjEmpleado->actualizarEmpleado($empleado);
  }

  public function listaEmpleados(){
     $ObjEmpleado = new empleadoDao();
     return $ObjEmpleado->listaEmpleados();
  }

  public function empleadoId($id_empleado){
    $ObjEmpleado=new empleadoDao();
    return $ObjEmpleado->listaConductorId($id_empleado);
  }

  public function empleadoIdUsuario($id_usuario){
    $ObjEmpleado=new empleadoDao();
    return   $ObjEmpleado->empleadoIdUsuario($id_usuario);
  }

}
?>
