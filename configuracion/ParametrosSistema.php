<?php

class ParametrosSistema{

private  $nombreBD="segcontrol";
private  $IPBD="localhost";
private  $usuarioBD="root";
private  $claveBD="";

function ParametrosSistema(){}

//nombre de la base de dato
 function getNombreBD(){return $this->nombreBD;}

//ip de la base de dato
 function getIPBD(){return $this->IPBD;}

//usuario de la base de dato
function getUsuarioBD(){return $this->usuarioBD;}

//clave para acceder a la base de datos
function getClaveBD(){return $this->claveBD;}

}

?>
