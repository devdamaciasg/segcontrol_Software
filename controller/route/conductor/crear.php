<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."conductorController.php");
require_once(MODEL_PATH."conductor.php");

$cc = $_POST['cc'];
$nombre= $_POST['nombre'];
$telefono1 = $_POST['telefono1'];
$telefono2 = $_POST['telefono2'];
$telefono3 = $_POST['telefono3'];

 $var = new conductorController();
 $conductor = new conductor("",$cc,$nombre,$telefono1,$telefono2,$telefono3);
 $var->registrarConductor($conductor);
 
 ?>
