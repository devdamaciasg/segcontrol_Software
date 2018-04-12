<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(ROOT_PATH."usuariosController.php");

$id = $_POST['usuario'];
$var = new sesionController();
$var->validarSesion($u,$c);

 ?>
