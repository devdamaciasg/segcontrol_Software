$(document).on('click','#ver',function(e){
e.stopPropagation();
e.preventDefault();

var id = document.getElementById("ver").value;

var params = { "id" : id};
$.ajax({
  data:   params,
  url:   '../controller/route/usuario/cliente.php',
  type:  'post',
  beforeSend: function () {
    //mostramos gif "cargando"
    //jQuery('#loading_spinner').show();
    //antes de enviar la petición al fichero PHP, mostramos mensaje
    $("#men").html("Validando...");
  },
  success:  function (response) {

    $("#modal_dinamico").html(response);
    $('#modalCliente').modal('show');
  }});

});
/************************************************************************************************/
