<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
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
