/*
 * Author: miguel angel claros
 * Date:
 * Description:
 *
 */
 $(document).on('click','#menuUsuarios',function(e){
 e.stopPropagation();
 e.preventDefault();
 		$.ajax({
 			url:   '../vistas/layout/general/estadisticas_admin.php',
 			type:  'post',
 			beforeSend: function () {
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
     $.ajax({
       url:   '../vistas/layout/general/panel_empresas.php',
       type:  'post',
       beforeSend: function () {
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
     $.ajax({
       url:   '../vistas/layout/general/panel_actividades.php',
       type:  'post',
       beforeSend: function () {
          $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
       },
       success:  function (response) {
         $("#contenido").html(response);
         $("#smg_panel").html("");
      }});
 });

  /***********************************************************************/
 $(document).on('click','#menuServicios',function(e){
 e.stopPropagation();
 e.preventDefault();
     $.ajax({
       url:   '../vistas/layout/general/panel_servicios.php',
       type:  'post',
       beforeSend: function () {
          $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
       },
       success:  function (response) {
         $("#contenido").html(response);
         $("#smg_panel").html("");
      }});
 });

  /***********************************************************************/
 $(document).on('click','#menuConfiguracion',function(e){
 e.stopPropagation();
 e.preventDefault();
     $.ajax({
       url:   '../vistas/layout/general/panel_configuracion.php',
       type:  'post',
       beforeSend: function () {
          $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
       },
       success:  function (response) {
         $("#contenido").html(response);
         $("#smg_panel").html("");
      }});
 });
