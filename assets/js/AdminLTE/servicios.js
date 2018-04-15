$(document).on('click','#verServicio',function(e){
  e.stopPropagation();
  e.preventDefault();

  var id=document.getElementById("verServicio").value;
  console.log(id);
  var params = { "id" : id};
  //llamada al fichero PHP con AJAX
  $.ajax({
    data:   params,
    url:   '../vistas/layout/general/servicios/verServicio.php',
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

  $(document).on('click','#agregar_servicio_main',function(e){
    e.stopPropagation();
    e.preventDefault();



    //llamada al fichero PHP con AJAX
    $.ajax({
      url:   '../vistas/layout/general/servicios/nuevoServicio.php',
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
      }

    });

  }

);

$(document).on('click','#verBitacora',function(e){
  e.stopPropagation();
  e.preventDefault();

  console.log('ww');

  //llamada al fichero PHP con AJAX
  $.ajax({
    url:   '../vistas/layout/general/servicios/historialServicio.php',
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


  function regresar(){

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
      }

    });

  }

  function botones() {
    console.log('bine');
    var actualizarBtn = document.getElementById("opciones_verConductor");
    actualizarBtn.style.visibility  = 'hidden'; // No se ve
    actualizarBtn.style.display = 'none'; // No ocupa espacio
  }


  $(document).on('click','#todos_servicio_listado',function(e){
    e.stopPropagation();
    e.preventDefault();
    console.log('todos');
    var params = { 'id' : 1 };
    //llamada al fichero PHP con AJAX
    $.ajax({
      data:   params,
      url:   '../controller/route/servicios/listaServicios.php',
      type:  'post',
      beforeSend: function () {
        //mostramos gif "cargando"
        //jQuery('#loading_spinner').show();
        //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
      },
      success:  function (response) {
        $("#servicios_contenedor_dinamico").html(response);
        $("#smg_panel").html("");
      }});
    });
    $(document).on('click','#activos_servicio_listado',function(e){
      e.stopPropagation();
      e.preventDefault();
      console.log('activos');
      var params = { 'id' : 2 };
      //llamada al fichero PHP con AJAX
      $.ajax({
        data:   params,
        url:   '../controller/route/servicios/listaServicios.php',
        type:  'post',
        beforeSend: function () {
          //mostramos gif "cargando"
          //jQuery('#loading_spinner').show();
          //antes de enviar la petición al fichero PHP, mostramos mensaje
          $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
        },
        success:  function (response) {
          $("#servicios_contenedor_dinamico").html(response);
          $("#smg_panel").html("");
        }});
      });
      $(document).on('click','#cerrados_servicio_listado',function(e){
        e.stopPropagation();
        e.preventDefault();
        console.log('cerrados');
        var params = { 'id' : 3 };
        //llamada al fichero PHP con AJAX
        $.ajax({
          data:   params,
          url:   '../controller/route/servicios/listaServicios.php',
          type:  'post',
          beforeSend: function () {
            //mostramos gif "cargando"
            //jQuery('#loading_spinner').show();
            //antes de enviar la petición al fichero PHP, mostramos mensaje
            $("#smg_panel").html("<ol class='breadcrumb'> <li><a><i class='fa fa-dashboard'></i> Cargando</a></li></ol>");
          },
          success:  function (response) {
            $("#servicios_contenedor_dinamico").html(response);
            $("#smg_panel").html("");
          }});
        });



        function readURL(input) {
          if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
              $('.image-upload-wrap').hide();

              $('.file-upload-image').attr('src', e.target.result);
              $('.file-upload-content').show();

              $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

          } else {
            removeUpload();
          }
        }

        function readURL2(input) {
          if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
              $('.image-upload-wrap2').hide();

              $('.file-upload-image2').attr('src', e.target.result);
              $('.file-upload-content2').show();

              $('.image-title2').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

          } else {
            removeUpload2();
          }
        }

        function removeUpload() {
          $('.file-upload-input').replaceWith($('.file-upload-input').clone());
          $('.file-upload-content').hide();
          $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
        		$('.image-upload-wrap').addClass('image-dropping');
        	});
        	$('.image-upload-wrap').bind('dragleave', function () {
        		$('.image-upload-wrap').removeClass('image-dropping');
        });

        function removeUpload2() {
          $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
          $('.file-upload-content2').hide();
          $('.image-upload-wrap2').show();
        }
        $('.image-upload-wrap2').bind('dragover', function () {
        		$('.image-upload-wrap2').addClass('image-dropping');
        	});
        	$('.image-upload-wrap2').bind('dragleave', function () {
        		$('.image-upload-wrap2').removeClass('image-dropping');
        });
