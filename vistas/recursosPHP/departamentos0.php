<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(PERSISTENCIA_PATH."DataSource.php");
$id2 = $_POST['id'];

$data_source = new DataSource();
$data_table = $data_source->ejecutarConsulta("SELECT * FROM `municipios` where  departamento_id = :id",array(':id'=>$id2));
echo "<div >
       <label>Municipios</label>
       <select class='form-control' id='municipio2' name='municipio2'>
       <option value='sin Seleccion'>Seleccione</option>";
foreach ($data_table as $clave => $valor) {
          echo "<option value='".$data_table[$clave]["municipio"]."'>".utf8_encode($data_table[$clave]["municipio"])."</option>";
         }
echo "</select></div>";





 ?>
