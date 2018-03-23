<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
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
