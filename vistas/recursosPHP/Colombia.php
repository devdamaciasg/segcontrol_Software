<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(PERSISTENCIA_PATH."DataSource.php");


 class colombia{


     public function departamentos(){//label,nombre,id
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `departamentos` ");
       echo "<div class='form-group col-xs-3'>
              <label>Departamentos</label>
              <select class='form-control' onchange='cargar()' id='depar' name='depar' '>
               <option value='sin Seleccion'>Seleccione departamento</option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["id_departamento"]."'>".$data_table[$clave]["departamento"]."</option>";
                }
       echo "</select></div>";

     }

     public function departamentos2(){//label,nombre,id
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `departamentos` ");
       echo "<div class='form-group col-xs-3'>
              <label>Departamentos</label>
              <select class='form-control' onchange='cargar2()' id='depar2' name='depar2' '>
               <option value='sin Seleccion'>Seleccione departamento</option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["id_departamento"]."'>".$data_table[$clave]["departamento"]."</option>";
                }
       echo "</select></div>";

     }


     public function municipios($id,$texto){
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `municipios` where  departamento_id = :id",array(':id'=>$id));
       echo "<div class='form-group col-xs-3'>
              <label>Municipios Origen</label>
              <select class='form-control' id='muni' name='muni'>
              <option value='sin Seleccion'>Seleccione ".$texto."</option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["municipio"]."'>".$data_table[$clave]["municipio"]."</option>";
                }
       echo "</select></div>";
     }

     public function municipios2($id,$texto){
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `municipios` where  departamento_id = :id",array(':id'=>$id));
       echo "<div class='form-group col-xs-3'>
              <label>Municipios Destino</label>
              <select class='form-control' id='muni2' name='muni2'>
              <option value='sin Seleccion'>Seleccione </option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["municipio"]."'>".$data_table[$clave]["municipio"]."</option>";
                }
       echo "</select></div>";
     }
 }
 ?>
