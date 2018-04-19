




 $(document).on('click','#servicios_main',function(e){
 e.stopPropagation();
 e.preventDefault();
console.log('servicios main');
     //llamada al fichero PHP con AJAX
     $.ajax({
       url:   '../vistas/layout/general/servicios/serviciosMain.php',
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
 /****************************************************************************************************************************/
 $(document).on('click','#bitacoras_main',function(e){
 e.stopPropagation();
 e.preventDefault();
     //llamada al fichero PHP con AJAX
     console.log('ef');
     $.ajax({
       url:   '../vistas/layout/general/servicios/minutaMain.php',
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
 /*******************************************************************************************************************************/
 $(document).on('click','#aseguradoras_main',function(e){
 e.stopPropagation();
 e.preventDefault();
     //llamada al fichero PHP con AJAX
console.log("menu aseguradora");
     $.ajax({
       url:   '../vistas/layout/general/aseguradora/aseguradoraMain.php',
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
