/*!
 * Author: miguel angel claros
 * Date:
 * Description:
 *
 !**/
 $(document).on('click','#menuUsuarios',function(e){
 e.stopPropagation();
 e.preventDefault();

 		//llamada al fichero PHP con AJAX
 		$.ajax({
 			url:   '../vistas/layout/general/estadisticas_admin.php',
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
 /**********************************************************************************/
 $(document).on('click','#menuEmpresas',function(e){
 e.stopPropagation();
 e.preventDefault();

     //llamada al fichero PHP con AJAX
     $.ajax({
       url:   '../vistas/layout/general/panel_empresas.php',
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
 /***********************************************************************/
 $(document).on('click','#menuActividades',function(e){
 e.stopPropagation();
 e.preventDefault();

     //llamada al fichero PHP con AJAX
     $.ajax({
       url:   '../vistas/layout/general/panel_actividades.php',
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
 $(document).on('click','#menuServicios',function(e){
 e.stopPropagation();
 e.preventDefault();

     //llamada al fichero PHP con AJAX
     $.ajax({
       url:   '../vistas/layout/general/panel_servicios.php',
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


 $(document).on('click','#conductor_main',function(e){
 e.stopPropagation();
 e.preventDefault();

     //llamada al fichero PHP con AJAX
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
      }});
 });
