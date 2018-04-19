<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once (PERSISTENCIA_PATH."DataSource.php");
require_once (MODEL_PATH."servicios.php");
require_once (MODEL_PATH."minuta.php");
require_once (MODEL_PATH."conductor.php");
require_once (MODEL_PATH."vehiculo.php");
require_once (MODEL_PATH."empleado.php");
require_once (MODEL_PATH."usuario.php");
require_once (MODEL_PATH."cliente.php");
class clienteDao
{

  public function listaCliente(){

    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta("SELECT * FROM `cliente` ");
    $objClientes = null;
    $arrayClientes = array();

    foreach ($data_table as $clave => $valor) {
    $objClientes = new cliente(
        $data_table[$clave]["id_cliente"],
        $data_table[$clave]["id_usuario"],
        $data_table[$clave]["razon_social"],
        $data_table[$clave]["nombre_contacto"],
        $data_table[$clave]["tipo_documento"],
        $data_table[$clave]["numero_documento"],
        $data_table[$clave]["direccion"],
        $data_table[$clave]["ciudad"],
        $data_table[$clave]["fijo"],
        $data_table[$clave]["celular1"],
        $data_table[$clave]["celular2"],
        $data_table[$clave]["email1"],
        $data_table[$clave]["email2"],
        $data_table[$clave]["email3"]);
        array_push(  $arrayClientes, $objClientes);
      }
      return   $arrayClientes;
    }

    public function listaClienteActivos(){

      $data_source = new DataSource();
      $data_table = $data_source->ejecutarConsulta("SELECT * FROM `cliente` ");
      $objClientes = null;
      $arrayClientes = array();

      foreach ($data_table as $clave => $valor) {
      $objClientes = new cliente(
          $data_table[$clave]["id_cliente"],
          $data_table[$clave]["id_usuario"],
          $data_table[$clave]["razon_social"],
          $data_table[$clave]["nombre_contacto"],
          $data_table[$clave]["tipo_documento"],
          $data_table[$clave]["numero_documento"],
          $data_table[$clave]["direccion"],
          $data_table[$clave]["ciudad"],
          $data_table[$clave]["fijo"],
          $data_table[$clave]["celular1"],
          $data_table[$clave]["celular2"],
          $data_table[$clave]["email1"],
          $data_table[$clave]["email2"],
          $data_table[$clave]["email3"]);
          array_push(  $arrayClientes, $objClientes);
        }
        return   $arrayClientes;
      }

    public function clienteId($id_cliente){

      $data_source = new DataSource();
      $data_table = $data_source->ejecutarConsulta("SELECT * FROM `cliente` where id_cliente = :id "
      ,array(':id'=>$id_cliente));
      $objClientes = null;

   if( count($data_table)>0){
     echo $data_table[0]["nombre_contacto"];
          $objClientes = new cliente(
          $data_table[0]["id_empleado"],
          $data_table[0]["id_usuario"],
          $data_table[0]["razon_social"],
          $data_table[0]["nombre_contacto"],
          $data_table[0]["tipo_documento"],
          $data_table[0]["numero_documento"],
          $data_table[0]["direccion"],
          $data_table[0]["ciudad"],
          $data_table[0]["fijo"],
          $data_table[0]["celular1"],
          $data_table[0]["celular2"],
          $data_table[0]["email1"],
          $data_table[0]["email2"],
          $data_table[0]["email3"]);
        return $objClientes;}
        else{
          return false;
        }
      }

      public function clienteIdUsuario($id_cliente){

        $data_source = new DataSource();

        $data_table = $data_source->ejecutarConsulta("SELECT * FROM `cliente` where id_usuario = :id "
        ,array(':id'=>$id_cliente));

        $objClientes = null;
        $arrayClientes = array();

        foreach ($data_table as $clave => $valor) {
        $objClientes = new cliente(
            $data_table[$clave]["id_empleado"],
            $data_table[$clave]["id_usuario"],
            $data_table[$clave]["razon_social"],
            $data_table[$clave]["nombre_contacto"],
            $data_table[$clave]["tipo_documento"],
            $data_table[$clave]["numero_documento"],
            $data_table[$clave]["direccion"],
            $data_table[$clave]["ciudad"],
            $data_table[$clave]["fijo"],
            $data_table[$clave]["celular1"],
            $data_table[$clave]["celular2"],
            $data_table[$clave]["email1"],
            $data_table[$clave]["email2"],
            $data_table[$clave]["email3"]);
            array_push(  $arrayClientes, $objClientes);
          }
          return $arrayClientes;
        }


      public function registrarCliente(empleado $empleado){
        $data_source = new DataSource();
        $sql2 = "INSERT INTO cliente VALUES (null,:id_usuario,:nombre,:razon,:tipo_documento,:numero_documento,
          :direccion,:ciudad,:fijo,:celular1,:celular2,:email1,:email2,:email3)";
          $resultado2 = $data_source->ejecutarActualizacion($sql2,array(
            ':idusuario'=>$empleado->ID_ultimo_Usuario(),
            ':nombre'=>$empleado->getNombre(),
            ':razon'=>$empleado->getRazon_social(),
            ':tipo_documento'=>$empleado->getTipo_documento(),
            ':numero_documento'=> $empleado->getNumero_documento(),
            ':direccion'=>$empleado->getDireccion(),
            ':ciudad'=>$empleado->getCiudad(),
            ':fijo'=>$empleado->getFijo(),
            ':celular1'=>$empleado->getCelular1(),
            ':celular2'=>$empleado->getCelular2(),
            ':email1'=>$empleado->getEmail(),
            ':email2'=>$empleado->getEmail2(),
            ':email3'=>$empleado->getEmail3())
          );
        return $resultado;
      }

      public function actualizarCliente(Cliente $cliente){
        $data_source = new DataSource();
        $sql = "UPDATE cliente SET
        id_usuario = :id_usuario,
        nombre_cliente = :nombre,
        razon_social = :razon,
        tipo_documento = :tipo_documento,
        numero_documento = :numero_documento,
        ciudad = :  ciudad,
        direccion= :direccion,
        fijo = :fijo,
        email1 = :email1,
        email2 = :email2,
        email3 = :email3,
        celular1 = :celular1,
        celular2 = :celular2 ";
        $resultado2 = $data_source->ejecutarActualizacion($sql2,array(
          ':idusuario'=>$cliente->ID_ultimo_Usuario(),
          ':nombre'=>$cliente->getNombre(),
          ':razon'=>$cliente>getRazon_social(),
          ':tipo_documento'=>$cliente->getTipo_documento(),
          ':numero_documento'=>$cliente->getNumero_documento(),
          ':direccion'=>$cliente->getDireccion(),
          ':ciudad'=>$cliente->getCiudad(),
          ':fijo'=>$cliente->getFijo(),
          ':celular1'=>$cliente->getCelular1(),
          ':celular2'=>$cliente->getCelular2(),
          ':email1'=>$cliente->getEmail(),
          ':email2'=>$cliente->getEmail2(),
          ':email3'=>$cliente->getEmail3())
        );
      return $resultado2;
    }
  }
  ?>
