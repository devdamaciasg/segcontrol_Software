/*!
 * Author: miguel angel claros
 * Date:
 * Description:
 *
 !**/
 /** funcion para validar entrda de usuario y clave al sistema***/
 $(document).on('click','#validarSesion',function(e){
 e.stopPropagation();
 e.preventDefault();
 var user=document.getElementById("usuario").value;
 var pass=document.getElementById("clave").value;
 var params = { "usuario" : user, "clave" : pass };
 		//llamada al fichero PHP con AJAX
 		$.ajax({
 			data:   params,
 			url:   '../controller/route/sesion/sesionRoute.php',
 			type:  'post',
 			beforeSend: function () {
 				//mostramos gif "cargando"
 				//jQuery('#loading_spinner').show();
 				//antes de enviar la petición al fichero PHP, mostramos mensaje
 				$("#smg").html("Validando...");
 			},
 			success:  function (response) {
 				$("#smg").html(response);
      }});
 });
/**  end function **/
