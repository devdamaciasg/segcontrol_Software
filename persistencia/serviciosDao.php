<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/servicios.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/minuta.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/conductor.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/vehiculo.php");
class serviciosDAO{

public function listaServicios(){

    $data_source = new DataSource();
    $data_table = $data_source->ejecutarConsulta("SELECT * FROM `servicio`");
    $objServicios = null;
    $arrayServicios = array();

    foreach ($data_table as $clave => $valor) {
      $objServicios = new servicio(
        $data_table[$clave]["id_servicio"],
        $data_table[$clave]["id_conductor"],
        $data_table[$clave]["id_vehiculo"],
        $data_table[$clave]["id_cliente"],
        $data_table[$clave]["id_empleado"],
        $data_table[$clave]["manifiesto"],
        $data_table[$clave]["fecha_creacion"],
        $data_table[$clave]["fecha_fin"],
        $data_table[$clave]["estado"],
        $data_table[$clave]["satelital"],
        $data_table[$clave]["ciudad_origen"],
        $data_table[$clave]["direccion_descargue"],
        $data_table[$clave]["sello"],
        $data_table[$clave]["numero_contenedor"],
        $data_table[$clave]["link_localizador"],
        $data_table[$clave]["usuario_satelital"],
        $data_table[$clave]["clave_satelital"],
        $data_table[$clave]["ruta"]);
        array_push($arrayServicios, $objServicios);
      }
      return $arrayServicios;
    }

public function servicioId($id){
      $data_source = new DataSource();
      $data_table = $data_source->ejecutarConsulta("SELECT * FROM `servicio` where id_servicio = :id",array(
        ':id'=>$id));
        $objServicios = null;
        if(count($data_table) == 1){
          foreach ($data_table as $clave => $valor) {
            $objServicios = new servicio();
            $objServicios->setId_servicio($data_table[$clave]["id_servicio"]);
            $objServicios->setId_empleado($data_table[$clave]["id_conductor"]);
            $objServicios->setId_conductor($data_table[$clave]["id_vehiculo"]);
            $objServicios->setId_vehiculo($data_table[$clave]["id_cliente"]);
            $objServicios->setId_cliente($data_table[$clave]["id_empleado"]);
            $objServicios->setManifiesto($data_table[$clave]["manifiesto"]);
            $objServicios->setFecha_creacion($data_table[$clave]["fecha_creacion"]);
            $objServicios->setFecha_fin($data_table[$clave]["fecha_fin"]);
            $objServicios->setEstado($data_table[$clave]["estado"]);
            $objServicios->setSatelital($data_table[$clave]["satelital"]);
            $objServicios->setCiudad_origen($data_table[$clave]["ciudad_origen"]);
            $objServicios->setDireccion_descargue($data_table[$clave]["direccion_descargue"]);
            $objServicios->setSello($data_table[$clave]["sello"]);
            $objServicios->setNumero_contenedor($data_table[$clave]["numero_contenedor"]);
            $objServicios->setLink_localizador($data_table[$clave]["link_localizador"]);
            $objServicios->setUsuario_satelital($data_table[$clave]["usuario_satelital"]);
            $objServicios->setClave_satelital($data_table[$clave]["clave_satelital"]);
            $objServicios->setRuta($data_table[$clave]["ruta"]);
          }
          return $objServicios;
        }else{
          return null;
        }
      }

public function servicioEmp($id){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM `servicio` where id_empleado = :id",array(
          ':id'=>$id));
          $objServicios = null;
          if(count($data_table) == 1){
            foreach ($data_table as $clave => $valor) {
              $objServicios = new servicio();
              $objServicios->setId_servicio($data_table[$clave]["id_servicio"]);
              $objServicios->setId_empleado($data_table[$clave]["id_conductor"]);
              $objServicios->setId_conductor($data_table[$clave]["id_vehiculo"]);
              $objServicios->setId_vehiculo($data_table[$clave]["id_cliente"]);
              $objServicios->setId_cliente($data_table[$clave]["id_empleado"]);
              $objServicios->setManifiesto($data_table[$clave]["manifiesto"]);
              $objServicios->setFecha_creacion($data_table[$clave]["fecha_creacion"]);
              $objServicios->setFecha_fin($data_table[$clave]["fecha_fin"]);
              $objServicios->setEstado($data_table[$clave]["estado"]);
              $objServicios->setSatelital($data_table[$clave]["satelital"]);
              $objServicios->setCiudad_origen($data_table[$clave]["ciudad_origen"]);
              $objServicios->setDireccion_descargue($data_table[$clave]["direccion_descargue"]);
              $objServicios->setSello($data_table[$clave]["sello"]);
              $objServicios->setNumero_contenedor($data_table[$clave]["numero_contenedor"]);
              $objServicios->setLink_localizador($data_table[$clave]["link_localizador"]);
              $objServicios->setUsuario_satelital($data_table[$clave]["usuario_satelital"]);
              $objServicios->setClave_satelital($data_table[$clave]["clave_satelital"]);
              $objServicios->setRuta($data_table[$clave]["ruta"]);
            }
            return $objServicios;
          }else{
            return null;
          }
        }

public function servicioCli($id){
          $data_source = new DataSource();
          $data_table = $data_source->ejecutarConsulta("SELECT * FROM `servicio` where id_cliente = :id",array(
            ':id'=>$id));
            $objServicios = null;
            if(count($data_table) == 1){
              foreach ($data_table as $clave => $valor) {
                $objServicios = new servicio();
                $objServicios->setId_servicio($data_table[$clave]["id_servicio"]);
                $objServicios->setId_empleado($data_table[$clave]["id_conductor"]);
                $objServicios->setId_conductor($data_table[$clave]["id_vehiculo"]);
                $objServicios->setId_vehiculo($data_table[$clave]["id_cliente"]);
                $objServicios->setId_cliente($data_table[$clave]["id_empleado"]);
                $objServicios->setManifiesto($data_table[$clave]["manifiesto"]);
                $objServicios->setFecha_creacion($data_table[$clave]["fecha_creacion"]);
                $objServicios->setFecha_fin($data_table[$clave]["fecha_fin"]);
                $objServicios->setEstado($data_table[$clave]["estado"]);
                $objServicios->setSatelital($data_table[$clave]["satelital"]);
                $objServicios->setCiudad_origen($data_table[$clave]["ciudad_origen"]);
                $objServicios->setDireccion_descargue($data_table[$clave]["direccion_descargue"]);
                $objServicios->setSello($data_table[$clave]["sello"]);
                $objServicios->setNumero_contenedor($data_table[$clave]["numero_contenedor"]);
                $objServicios->setLink_localizador($data_table[$clave]["link_localizador"]);
                $objServicios->setUsuario_satelital($data_table[$clave]["usuario_satelital"]);
                $objServicios->setClave_satelital($data_table[$clave]["clave_satelital"]);
                $objServicios->setRuta($data_table[$clave]["ruta"]);
              }
              return $objServicios;
            }else{
              return null;
            }
          }

public function registrarServicio(servicio $servicio){
            $data_source = new DataSource();
            $sql = "INSERT INTO servicio VALUES (:id_servico,:id_conductor,:id_vehiculo,:id_cliente,
              :id_empleado,:manifiesto,:fecha_creacion,:fecha_fin,:estado,:satelital,:ciudad_origen,
              :direccion_descargue,:sello,:numero_contenedor,:link_localizador,:usuario_satelital,
              :clave_satelital,:ruta)";

              $resultado = $data_source->ejecutarActualizacion($sql,array(
                ':id_servico'=>$servicio->getId_servico(),
                ':id_conductor'=>$servicio->getId_conductor(),
                ':id_vehiculo'=>$servicio->getId_vehiculo(),
                ':id_cliente'=>$servicio->getId_cliente(),
                ':id_empleado'=>$servicio->getId_empleado(),
                ':manifiesto'=>$servicio->getManifiesto(),
                ':fecha_creacion'=>$servicio->getFecha_creacion(),
                ':fecha_fin'=>$servicio->getFecha_fin(),
                ':estado'=>$servicio->getEstado(),
                ':satelital'=>$servicio->getSatelital(),
                ':ciudad_origen'=>$servicio->getCiudad_origen(),
                ':direccion_descargue'=>$servicio->getDireccion_descargue(),
                ':sello'=>$servicio->getSello(),
                ':numero_contenedor'=>$servicio->getNumero_contenedor(),
                ':link_localizador'=>$servicio->getLink_localizador(),
                ':usuario_satelital'=>$servicio->getUsuario_satelital(),
                ':clave_satelital'=>$servicio->getClave_satelital(),
                ':ruta'=>$servicio->getRuta()
              )
            );
            return $resultado;

          }

public function actualizarServicio(servicio $servicio){
            $data_source = new DataSource();
            $sql = "UPDATE servicio SET id_conductor = :id_conductor,
            id_vehiculo = :id_vehiculo,
            id_cliente = :id_cliente,
            id_empleado = :id_empleado,
            manifiesto = :manifiesto,
            fecha_creacion = :fecha_creacion,
            fecha_fin = :fecha_fin,
            estado = :estado,
            satelital = :satelital,
            ciudad_origen = :ciudad_origen,
            direccion_descargue = :direccion_descargue,
            sello = :sello,
            numero_contenedor = :numero_contenedor,
            link_localizador = :link_localizador,
            usuario_satelital = :usuario_satelital,
            clave_satelital = :clave_satelital,
            ruta = :ruta
            WHERE idservicio = :idservicio
            ";
            $resultado = $data_source->ejecutarActualizacion($sql,array(
              ':id_conductor'=>$servicio->getId_conductor(),
              ':id_vehiculo'=>$servicio->getId_vehiculo(),
              ':id_cliente'=>$servicio->getId_cliente(),
              ':id_empleado'=>$servicio->getId_empleado(),
              ':manifiesto'=>$servicio->getManifiesto(),
              ':fecha_creacion'=>$servicio->getFecha_creacion(),
              ':fecha_fin'=>$servicio->getFecha_fin(),
              ':estado'=>$servicio->getEstado(),
              ':satelital'=>$servicio->getSatelital(),
              ':ciudad_origen'=>$servicio->getCiudad_origen(),
              ':direccion_descargue'=>$servicio->getDireccion_descargue(),
              ':sello'=>$servicio->getSello(),
              ':numero_contenedor'=>$servicio->getNumero_contenedor(),
              ':link_localizador'=>$servicio->getLink_localizador(),
              ':usuario_satelital'=>$servicio->getUsuario_satelital(),
              ':clave_satelital'=>$servicio->getClave_satelital(),
              ':ruta'=>$servicio->getRuta(),
              ':idservicio'=>$servicio->getId_servicio()
            )
          );
          return $resultado;
        }

public function cerrarServicio($id_servicio){
          $data_source = new DataSource();
          $sql = "UPDATE servicio SET estado = CERRADO,
          WHERE idservicio = :idservicio";
          $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_servicio'=>$id_servicio));
            return $resultado;
}



}
?>