<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/usuariosController.php");
$id = $_POST['id'];
$obj = array();
$var = new usuariosController();
$obj=$var->cargarListaCliente($id);
echo "nombre ".$obj[0]->getNombre();
//include($_SERVER['DOCUMENT_ROOT']."/segcontrol/vistas/layout/cliente/modalVer.php?var=".serialize($var->cargarListaCliente($id))."");

 ?>
