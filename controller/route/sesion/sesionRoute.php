<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."route/sesion/sesionController.php");

$u = $_POST['usuario'];
$c = $_POST['clave'];
$var = new sesionController();
$var->validarSesion($u,$c);

?>
