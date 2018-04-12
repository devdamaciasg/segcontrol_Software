<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];

$var = new usuariosController();
$var->actualizarPerfil($usuario,$rol,$estado,$id);
if(is_null($var)){
    echo "<span>Actualizacion completada</span>";
}else {
    echo "<span>Error en la actualizacion !</span>";
}
 ?>
