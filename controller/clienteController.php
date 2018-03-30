<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuariosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/serviciosDao.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");
class clienteController{

    public function registrarCliente(cliente $cliente){
      $ObjCliente=new clienteDao();
      return   $ObjCliente->registrarCliente($cliente);
    }

    public function actualizarCliente(cliente $cliente){
      $ObjCliente=new clienteDao();
      return   $ObjCliente->actualizarCliente($empleado);
    }

    public function listaClientes(){
      $ObjCliente=new clienteDao();
      return   $ObjCliente->listaEmpleados();
    }

    public function clienteId($id_cliente){
      $ObjCliente=new clienteDao();
      return $ObjCliente->listaClienteId($id_cliente);
    }

    public function clienteIdUsuario($id_usuario){
      $ObjCliente=new clienteDao();
      return   $ObjCliente->clienteIdUsuario($id_usuario);
    }

}


?>
