<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
$id = $_POST['id'];
$obj = array();
$var = new usuariosController();
$obj=$var->cargarListaCliente($id);
echo "nombre ".$obj[0]->getNombre();
//include($_SERVER['DOCUMENT_ROOT']."/segcontrol/vistas/layout/cliente/modalVer.php?var=".serialize($var->cargarListaCliente($id))."");

 ?>
