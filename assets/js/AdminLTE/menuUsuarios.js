/*****************************************************************************************/
$(document).on('click','#empleadosVista',function(e){
e.stopPropagation();
e.preventDefault();
   var sesion=document.getElementById("sesionHidden").value;
   console.log(sesion);
   var params = { "sesion"  : sesion };
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../vistas/layout/general/empleado/empleadoMain.php',
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
$(document).on('click','#clientesVista',function(e){
e.stopPropagation();
e.preventDefault();
   var sesion=document.getElementById("sesionHidden").value;
   var params = { "sesion"  : sesion };
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../vistas/layout/general/cliente/clienteMain.php',
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


$(document).on('click','#perfil',function(e){
e.stopPropagation();
e.preventDefault();
   var sesion=document.getElementById("sesionHidden").value;
   var usuario=document.getElementById("usuarioHidden").value;
   var clave=document.getElementById("claveHidden").value;
   var estado=document.getElementById("estadoHidden").value;
   var rol=document.getElementById("rolHidden").value;
   console.log(sesion);
   var params = { "sesion"  : sesion,
                  "usuario" : usuario,
                  "clave"   : clave,
                  "estado"  : estado,
                  "rol"     : rol  };
   //llamada al fichero PHP con AJAX
   $.ajax({
     data:   params,
     url:   '../vistas/layout/administrador/perfil.php?sesion='+sesion+'&usuario='+usuario+'&clave='+clave+'&estado='+estado+'&rol='+rol,
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
