/*!
 * Author: miguel angel claros
 * Date:
 * Description:
 !**/
 /** funcion para validar entrda de usuario y clave al sistema***/
 $(document).on('click','#validarSesion',function(e){
   console.log("validar sesion");
 e.stopPropagation();
 e.preventDefault();
 var user=document.getElementById("usuario").value;
 var pass=document.getElementById("clave").value;
 var params = { "usuario" : user, "clave" : pass };
 console.log(user+" "+pass);
 		$.ajax({
 			data:   params,
 			url:   '../controller/route/sesion/sesionRoute.php',
 			type:  'post',
 			beforeSend: function () {
 				$("#smg").html("Validando...");
 			},
 			success:  function (response) {
 				$("#smg").html(response);
      }});
 });
/*****************************************************/
 $(document).on('click','#recordar',function(e){
   alert("opcion recordar ... en construccion");
});
/*****************************************************/
 $(document).on('click','#olvidoClave',function(e){
   alert("opcion olvidoClave ... en construccion");
});
$(document).on('click','#cerrarSesion',function(e){
  window.location.replace("http://segcontrol.com.co/app/segcontrol/vistas/index.php");
});
