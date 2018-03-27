$(document).on('click','#verConductor',function(e){
e.stopPropagation();
e.preventDefault();

var id=document.getElementById("verConductor").value;
console.log(id);
var params = { "id" : id};
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../vistas/layout/general/conductor/verConductor.php',
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

$(document).on('click','#agregar_conductor_main',function(e){
e.stopPropagation();
e.preventDefault();



   //llamada al fichero PHP con AJAX
   $.ajax({
     url:   '../vistas/layout/general/conductor/crearConductor.php',
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

$(document).on('click','#guardar_conductor_main',function(e){
console.log("agregar conductor ");
var cc=document.getElementById("conductor_cedula").value;
var nombre=document.getElementById("conductor_nombre").value;
var telefono1=document.getElementById("conductor_telefono1").value;
var telefono2=document.getElementById("conductor_telefono2").value;
var telefono3=document.getElementById("conductor_telefono3").value;

var params = { "cc" : cc ,"nombre" : nombre ,"telefono1" : telefono1 , "telefono2" : telefono2 , "telefono3" : telefono3};
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../controller/route/conductor/crear.php',
     type:  'post',
     beforeSend: function () {
       //mostramos gif "cargando
       //jQuery('#loading_spinner').show();
       //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
     },
     success:  function (response) {
       $("#contenido").html(response);
       $("#smg_panel").html("");
       regresar();
     }

   });
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
