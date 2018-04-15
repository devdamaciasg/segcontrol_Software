<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."conductorController.php");
require_once(CONTROLLER_PATH."vehiculoController.php");
require_once(CONTROLLER_PATH."serviciosController.php");

$estado = $_POST['id'];

$arrayServicios = array();

$objVehi = new vehiculoController();
$objCond = new conductorController();
$objServi = new serviciosController();
?>
