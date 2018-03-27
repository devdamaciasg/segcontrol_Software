<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");
class conductorDao
{

  public function listaConductor(){

    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta("SELECT * FROM `conductor` ");
    $objConductor = null;
    $arrayConductor = array();
    if(count($data_table)>0){
    foreach ($data_table as $clave => $valor) {
      $objConductor = new conductor(
        $data_table[$clave]["id_conductor"],
        $data_table[$clave]["cedula"],
        $data_table[$clave]["nombre_conductor"],
        $data_table[$clave]["telefono1"],
        $data_table[$clave]["telefono2"],
        $data_table[$clave]["telefono3"]);
        array_push($arrayConductor, $objConductor);
      }
      return $arrayConductor;
    }else{
      return null;
    }

    }

    public function listaConductorId($id_conductor){

      $data_source = new DataSource();
      $data_table = $data_source->ejecutarConsulta("SELECT * FROM `conductor` where id_conductor = :id "
      ,array(':id'=>$id_conductor));
      $objConductor = null;
      if(count($data_table)>0){

         $objConductor = new conductor(
          $data_table[0]["id_conductor"],
          $data_table[0]["cedula"],
          $data_table[0]["nombre_conductor"],
          $data_table[0]["telefono1"],
          $data_table[0]["telefono2"],
          $data_table[0]["telefono3"]);
            return $objConductor;
        }else{
             return null;
        }

      }





      public function registrarConductor(conductor $conductor){
        $data_source = new DataSource();
        $sql = "INSERT INTO conductor VALUES (null,:cedula,:nombre_conductor,:telefono1,:telefono2,:telefono3)";

          $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':cedula'=>$conductor->getCedula(),
            ':nombre_conductor'=>$conductor->getNombre_conductor(),
            ':telefono1'=>$conductor->getTelefono1(),
            ':telefono2'=>$conductor->getTelefono2(),
            ':telefono3'=>$conductor->getTelefono3()
          )
        );
        return $resultado;

      }

      public function actualizarConductor(conductor $conductor){
        $data_source = new DataSource();
        $sql = "UPDATE conductor SET
        id_empleado = :id_empleado,
        fecha_novedad = :fecha_novedad,
        telefono1 = :telefono1,
        telefono2 = :telefono2,
        telefono3 = :telefono3
        WHERE id_conductor = :id_conductor";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
          ':id_conductor'=>$conductor->getId_conductor(),
          ':id_empleado'=>$conductor->getId_empleado(),
          ':cedula'=>$conductor->getCedula(),
          ':nombre_conductor'=>$conductor->getNombre_conductor(),
          ':telefono1'=>$conductor->getTelefono1(),
          ':telefono2'=>$conductor->getTelefono2(),
          ':telefono3'=>$conductor->getTelefono3()
        )
      );
      return $resultado;
    }
  }
  ?>
