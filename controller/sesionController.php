
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/usuarioDao.php");

class sesionController{

  public function validarSesion($u,$c){
    $s = new usuarioDAO();
    $obj = $s->validadSesion($u,$c);
    if(is_null($obj) ){
        echo  "<span> No se encuentra el usuario o la contraseña es incorrecta </span>";
    }else{
      $cookie = new usuario(
        "id_usuario" => $obj[0]->getId_usuario(),
        "rol" => $obj[0]->getId_rol(),
        "usuario" => $obj[0]->getUsuario(),
        "clave" => $obj[0]->getClave(),
        "estado" => $obj[0]->getEstado()
      );
      //$url="master.php?id_usuario=".$obj['id']."&rol=".$obj['rol']."&nombre=".$obj['nombre']."&estado=".$obj['estado']."&id_sesion_tipo=".$obj['id_sesion_tipo'];
      $url ="master.php?array=".serialize($cookie);
      echo  "<script>window.location.replace('".$url."');</script> ";
      //header('Location: ../../vistas/master.php?array='.serialize($cookie));
   }
 }

}/*echo $obj[0]->getNombre();
$cookie = array(
  "id_usuario" => $obj->getId_usuario(),
  "rol" => $obj->getRol(),
  "estado" => $obj->getEstado(),
  "id_sesion_tipo" => $obj->getId_sesion_tipo(),
  "nombre" => $obj->getNombre()
);

$cookie = array(
  "id_usuario" => $obj['id'],
  "rol" => $obj['rol'],
  "estado" => $obj['estado'],
  "id_sesion_tipo" => $obj['id_sesion_tipo'],
  "nombre" => $obj['nombre']
);*/
?>
