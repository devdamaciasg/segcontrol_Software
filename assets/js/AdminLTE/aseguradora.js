/***********************************************************************************************************************/
 $(document).on('click','#registro_aseguradora',function(e){
 e.stopPropagation();
 e.preventDefault();
     //llamada al fichero PHP con AJAX
console.log("menu aseguradora");
     $.ajax({
       url:   '../vistas/layout/general/aseguradora/crearAseguradora.php',
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
 /***********************************************************************************************************************/
 $(document).on('click','#verAseguradora',function(e){
 e.stopPropagation();
 e.preventDefault();
     //llamada al fichero PHP con AJAX
 console.log("menu aseguradora");
     $.ajax({
       url:   '../vistas/layout/general/aseguradora/verAseguradora.php',
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

 /***********************************************************************************************************************/
