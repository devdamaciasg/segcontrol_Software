<?php


class ParametrosSistema{


private  $carpetaPDF="recursos/certificados/";
private  $carpetaCSV='recursos/temporal/';
private  $carpetaSENA="recursos/carpeta_sena/";

// metadatos base de datos certificados
private  $nombreBD="segcontrol";
private  $IPBD="localhost";
private  $usuarioBD="root";
private  $claveBD="";

function ParametrosSistema(){}

//retorna la ubicacion de la carpeta donde se va guardar los archivos generados del sena.
 public function  getCarpetaPDF(){return $this->carpetaPDF;}

//retorna la ubicacion de la carpeta donde se va guardan los archivos csv subidos.
 public function getCarpetaCSV(){return $this->carpetaCSV;}

//retorna la ubicacion de la carpeta donde se generan los archivos temporales para el sena.
function getCarpetaSENA(){return $this->carpetaSENA;}

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
