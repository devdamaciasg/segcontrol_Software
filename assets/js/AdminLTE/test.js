function cargar(){

  var id = document.getElementById("depar").value;

  var params = { "id" : id};
  $.ajax({
    data:   params,
    url:   '../vistas/recursosPHP/departamentos.php',
    type:  'post',
    beforeSend: function () {
      //mostramos gif "cargando"
      //jQuery('#loading_spinner').show();
      //antes de enviar la petición al fichero PHP, mostramos mensaje

    },
    success:  function (response) {

      $("#select_municipio").html(response);
    }});
}

function cargar2(){

  var id2 = document.getElementById("depar2").value;

  var params = { "id" : id2};
  $.ajax({
    data:   params,
    url:   '../vistas/recursosPHP/departamentos0.php',
    type:  'post',
    beforeSend: function () {
      //mostramos gif "cargando"
      //jQuery('#loading_spinner').show();
      //antes de enviar la petición al fichero PHP, mostramos mensaje

    },
    success:  function (response) {

      $("#select_municipio2").html(response);
    }});
}
