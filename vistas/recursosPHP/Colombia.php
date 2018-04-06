<?php
 require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");

 class colombia{


     public function departamentos($texto,$texto2,$texto3){
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `departamentos` ");
       echo "<div class='form-group col-xs-3'>
              <label>".$texto."</label>
              <select class='form-control' onchange='".$texto2."' id='".$texto3."' name='".$texto3."' '>
               <option value='sin Seleccion'>Seleccione ".$texto."</option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["id_departamento"]."'>".$data_table[$clave]["departamento"]."</option>";
                }
       echo "</select></div>";
     }


     public function municipios($id,$texto){
       $data_source = new DataSource();
       $data_table = $data_source->ejecutarConsulta("SELECT * FROM `municipios` where  departamento_id = :id",array(':id'=>$id));
       echo "<div class='form-group col-xs-3'>
              <label>Municipios</label>
              <select class='form-control' id='municipio' name='municipio'>
              <option value='sin Seleccion'>Seleccione ".$texto."</option>";
       foreach ($data_table as $clave => $valor) {
                 echo "<option value='".$data_table[$clave]["municipio"]."'>".$data_table[$clave]["municipio"]."</option>";
                }
       echo "</select></div>";
     }
 }
 ?>
