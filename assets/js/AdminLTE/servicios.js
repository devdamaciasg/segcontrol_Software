$(document).on('click','#verServicio',function(e){
e.stopPropagation();
e.preventDefault();

var id=document.getElementById("verServicio").value;
console.log(id);
var params = { "id" : id};
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../vistas/layout/general/servicios/verServicio.php',
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

$(document).on('click','#agregar_servicio_main',function(e){
e.stopPropagation();
e.preventDefault();



   //llamada al fichero PHP con AJAX
   $.ajax({
     url:   '../vistas/layout/general/servicios/nuevoServicio.php',
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
     }

   });

}

);

$(document).on('click','#verBitacora',function(e){
  e.stopPropagation();
  e.preventDefault();

  console.log('ww');

     //llamada al fichero PHP con AJAX
     $.ajax({
       url:   '../vistas/layout/general/servicios/historialServicio.php',
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


function regresar(){

  $.ajax({
    url:   '../vistas/layout/general/conductor/conductorMain.php',
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
    }

  });

}

function botones() {
  console.log('bine');
  var actualizarBtn = document.getElementById("opciones_verConductor");
  actualizarBtn.style.visibility  = 'hidden'; // No se ve
  actualizarBtn.style.display = 'none'; // No ocupa espacio
}
