
$(document).on('click','#servicios_main',function(e){
  e.stopPropagation();
  e.preventDefault();
  console.log(" servicios opcion ->menu servicios");
  $.ajax({
    url:   '../vistas/layout/general/servicios/serviciosMain.php',
    type:  'post',
    beforeSend: function () {
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
    console.log(" servicios opcion -> menu bitacora");
    $.ajax({
      url:   '../vistas/layout/general/servicios/minutaMain.php',
      type:  'post',
      beforeSend: function () {
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
      console.log(" servicios opcion -> menu aseguradora");
      $.ajax({
        url:   '../vistas/layout/general/aseguradora/aseguradoraMain.php',
        type:  'post',
        beforeSend: function () {
          $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
        },
        success:  function (response) {
          $("#contenido").html(response);
          $("#smg_panel").html("");
        }});
      });
