<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/usuariosController.php");

$id = $_POST['usuario'];
$var = new sesionController();
$var->validarSesion($u,$c);

 ?>
