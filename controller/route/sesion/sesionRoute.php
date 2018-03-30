<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/sesionController.php");

$u = $_POST['usuario'];
$c = $_POST['clave'];
$var = new sesionController();
$var->validarSesion($u,$c);

?>
