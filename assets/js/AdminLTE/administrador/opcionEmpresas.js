$(document).on('click','#conductor_main',function(e){
e.stopPropagation();
e.preventDefault();
console.log(" empresa opcion -> menu conductor");
    $.ajax({
      url:   '../vistas/layout/general/conductor/conductorMain.php',
      type:  'post',
      beforeSend: function () {
         $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
      },
      success:  function (response) {
        $("#contenido").html(response);
        $("#smg_panel").html("");
     }});
});
/*******************************************************************************************************************/
$(document).on('click','#clientesMain',function(e){
e.stopPropagation();
e.preventDefault();
console.log(" empresa opcion -> menu cliente");
    $.ajax({
      url:   '../vistas/layout/general/cliente/clienteMain.php',
      type:  'post',
      beforeSend: function () {
         $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
      },
      success:  function (response) {
        $("#contenido").html(response);
        $("#smg_panel").html("");
     }});
});
/*******************************************************************************************************************/
$(document).on('click','#vehiculosMain',function(e){
e.stopPropagation();
e.preventDefault();
console.log(" empresa opcion -> menu vehiculos");
    $.ajax({
      url:   '../vistas/layout/general/vehiculo/vehiculoMain.php',
      type:  'post',
      beforeSend: function () {
         $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
      },
      success:  function (response) {
        $("#contenido").html(response);
        $("#smg_panel").html("");
     }});
});
/*******************************************************************************************************************/
