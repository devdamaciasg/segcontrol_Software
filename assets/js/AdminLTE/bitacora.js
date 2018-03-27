$(document).on('click','#crear_Minuta_Servicio',function(e){
e.stopPropagation();
e.preventDefault();

   //llamada al fichero PHP con AJAX
   $.ajax({
     url:   '../vistas/layout/general/servicios/crearMinuta.php',
     type:  'post',
     beforeSend: function () {
       //mostramos gif "cargando"
       //jQuery('#loading_spinner').show();
       //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
     },
     success:  function (response) {
       $("#contenido").html(response);
        $("#smg_panel").html("");
     }});
});
