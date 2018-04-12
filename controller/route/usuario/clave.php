<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
$id = $_POST['id'];
$clave = $_POST['cu1'];
$var = new usuariosController();
$var->cambioClave($id,$clave);
if(is_null($var)){
    echo "<span>Actualizacion completada</span>";
}else {
    echo "<span>Error en la actualizacion !</span>";
}
 ?>
