/*****************************************************************************************/
$(document).on('click','#bd_main',function(e){
e.stopPropagation();
e.preventDefault();
console.log("Opcion configuracion->Base de datos");
   $.ajax({
     data:   params,
     url:   '../vistas/layout/general/configuracion/basedeDatos.php',
     type:  'post',
     beforeSend: function () {
       $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
     },
     success:  function (response) {
       $("#contenido").html(response);
       $("#smg_panel").html("");
     }});
});
/******************************************************************************************/
$(document).on('click','#estadisticasSistema',function(e){
e.stopPropagation();
e.preventDefault();
console.log("Opcion configuracion-> estadisticas Sistema");

   $.ajax({
     url:   '../vistas/layout/general/configuracion/parametrosSistema.php',
     type:  'post',
     beforeSend: function () {
       $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
     },
     success:  function (response) {
       $("#contenido").html(response);
       $("#smg_panel").html("");
     }});
});
/************************************************************************************************/
$(document).on('click','#parametros_main',function(e){
e.stopPropagation();
e.preventDefault();
console.log("Opcion configuracion-> parametros Sistema");
   $.ajax({
     url:   '../vistas/layout/general/configuracion/parametrosSistema.php',
     type:  'post',
     beforeSend: function () {
       $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
     },
     success:  function (response) {
       $("#contenido").html(response);
       $("#smg_panel").html("");
     }});
});
