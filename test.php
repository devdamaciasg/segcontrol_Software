<?php

$fecha = date('Y-m-j H:i:s'); //inicializo la fecha con la hora

$nuevafecha = strtotime ( '+1 hour' , strtotime ( $fecha ) ) ;
$nuevafecha = strtotime ( '+10 minute' , $nuevafecha ) ; // utilizo "nuevafecha"
$nuevafecha = strtotime ( '+10 second' , $nuevafecha ) ; // utilizo "nuevafecha"
$nuevafecha = date ( 'Y-m-j H:i:s' , $nuevafecha );
echo " ";
echo "$fecha (Fecha Inicial)";
echo " ";
echo "$nuevafecha (Fecha con Suma)";
echo " ";

$Hora = Time(); // Hora actual
echo date('H:i:s:u a',$Hora)."";

$Hora = Time() + (60 *60 * 12);
echo date('H:i:s:u a',$Hora); // + 12 hora

?>
