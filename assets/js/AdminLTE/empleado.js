$(document).on('click','#crear_empleado',function(e){
  e.stopPropagation();
  e.preventDefault();
  //llamada al fichero PHP con AJAX

  $.ajax({
    url:   '../vistas/layout/general/empleado/crearEmpleado.php',
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

  $(document).on('click','#actualizar_tabla_empleado',function(e){
    e.stopPropagation();
    e.preventDefault();

    //llamada al fichero PHP con AJAX
    $.ajax({
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

    $(document).on('click','#guardar_usuario',function(e){
      e.stopPropagation();
      e.preventDefault();
      //llamada al fichero PHP con AJAX
      var id_rol=document.getElementById("id_rol").value;
      var usuario=document.getElementById("usuario").value;
      var clave=document.getElementById("clave").value;
      var estado=document.getElementById("estado").value;

      var id_usuario=document.getElementById("id_usuario").value;
      var nombre=document.getElementById("nombre").value;
      var tipo_documento=document.getElementById("tipo_documento").value;
      var numero_documento=document.getElementById("numero_documento").value;
      var direccion=document.getElementById("direccion").value;
      var ciudad=document.getElementById("ciudad").value;
      var fijo=document.getElementById("fijo").value;
      var celular1=document.getElementById("celular1").value;
      var celular2=document.getElementById("celular2").value;
      var celular3=document.getElementById("celular3").value;
      var email=document.getElementById("email").value;
      var foto=document.getElementById("foto").value;

      var params = {  "id_rol"  : id_rol ,
      "usuario" : usuario ,
      "clave"   : clave ,
      "nombre" : nombre ,
      "tipo_documento" : tipo_documento ,
      "numero_documento" : numero_documento ,
      "direccion" : direccion ,
      "ciudad" : ciudad ,
      "fijo" : fijo,
      "celular1" : celular1 ,
      "celular2" : celular2 ,
      "celular3" : celular3,
      "email" : email,
      "foto"  : foto };
      $.ajax({
        data:   params,
        url:   '../controller/route/empleado/guardar.php',
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


      $(document).on('click','#id_usuario',function(e){
        e.stopPropagation();
        e.preventDefault();
        //llamada al fichero PHP con AJAX
        var id=document.getElementById("id").value;
        var params = { "id" : id};
        $.ajax({
          data:   params,
          url:   '../vistas/layout/general/empleado/verEmpleado.php',
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

        $(document).on('click','#desactivar_empleado',function(e){
          e.stopPropagation();
          e.preventDefault();
          //llamada al fichero PHP con AJAX
          var id=document.getElementById("id").value;
          var params = { "id" : id};
          $.ajax({
            data:   params,
            url:   '../vistas/layout/general/empleado/desactivar.php',
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



          $(document).on('click','#activar_empleado',function(e){
            e.stopPropagation();
            e.preventDefault();
            //llamada al fichero PHP con AJAX
            var id=document.getElementById("id").value;
            var params = { "id" : id};
            $.ajax({
              data:   params,
              url:   '../vistas/layout/general/empleado/activar.php',
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
