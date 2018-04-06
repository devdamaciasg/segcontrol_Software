<?php
$id = $_POST['id'];

$data_source = new DataSource();
$data_table = $data_source->ejecutarConsulta("SELECT * FROM `municipios` where  departamento_id = :id",array(':id'=>$id));
echo "<div class='form-group col-xs-3'>
       <label>Municipios</label>
       <select class='form-control' id='municipio' name='municipio'>
       <option value='sin Seleccion'>Seleccione municipio</option>";
foreach ($data_table as $clave => $valor) {
          echo "<option value='".$data_table[$clave]["municipio"]."'>".$data_table[$clave]["municipio"]."</option>";
         }
echo "</select></div>";




 ?>
