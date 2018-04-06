function cargar(){
  var id = document.getElementById("departamento").value;

  var params = { "id" : id};
  $.ajax({
    data:   params,
    url:   '../../vistas/recursosPHP/departamentos.php',
    type:  'post',
    beforeSend: function () {
      //mostramos gif "cargando"
      //jQuery('#loading_spinner').show();
      //antes de enviar la petición al fichero PHP, mostramos mensaje

    },
    success:  function (response) {

      $("#origen").html(response);
    }});
}

function cargar2(){
  var id = document.getElementById("departamento").value;

  var params = { "id" : id};
  $.ajax({
    data:   params,
    url:   '../../vistas/recursosPHP/departamentos.php',
    type:  'post',
    beforeSend: function () {
      //mostramos gif "cargando"
      //jQuery('#loading_spinner').show();
      //antes de enviar la petición al fichero PHP, mostramos mensaje

    },
    success:  function (response) {

      $("#destino").html(response);
    }});
}
