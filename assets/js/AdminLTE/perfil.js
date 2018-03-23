$(document).on('click','#datos_usuario',function(e){
e.stopPropagation();
e.preventDefault();

  if(datos_usuario.value == "Editar"){
    document.getElementById("selectRol").disabled=false;
    document.getElementById("usuario").disabled=false;
    document.getElementById("selectEstado").disabled=false;
    datos_usuario.value="Actualizar";
  }else{


    var rol =document.getElementById("selectRol").value;
    var usuario =document.getElementById("usuario").value;
    var estado =document.getElementById("selectEstado").value;
    var id=document.getElementById("idHidden").value;
    var params = { "usuario" : usuario, "rol" : rol , "estado" : estado,"id" : id};
    $.ajax({
      data:   params,
      url:   '../controller/route/usuario/perfil.php',
      type:  'post',
      beforeSend: function () {
        //mostramos gif "cargando"
        //jQuery('#loading_spinner').show();
        //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg").html("Validando...");
      },
      success:  function (response) {

        $("#smg").html(response);
        $('#modal1').modal('show');
      }});
      document.getElementById("selectRol").disabled=true;
      document.getElementById("usuario").disabled=true;
      document.getElementById("selectEstado").disabled=true;
    datos_usuario.value="Editar";
  }
});
/****************************************************************************/
$(document).on('click','#datos_clave_usuario',function(e){
e.stopPropagation();
e.preventDefault();

  if(datos_clave_usuario.value == "Editar"){
    document.getElementById("clave").disabled=false;
    document.getElementById("clave2").disabled=false;
    document.getElementById("clave3").disabled=false;
    datos_clave_usuario.value="Cambiar";
  }else{
    var cu =document.getElementById("claveHidden").value;
    var c1 =document.getElementById("clave2").value;
    var c2 =document.getElementById("clave3").value;
    var cu1 =document.getElementById("clave").value;
    if(cu == cu1){
      if(c1 == c2){
        var id = document.getElementById("idHidden").value;
        var params = { "id" : id, "clave" : cu1 };
        $.ajax({
          data:   params,
          url:   '../controller/route/usuario/clave.php',
          type:  'post',
          beforeSend: function () {
            //mostramos gif "cargando"
            //jQuery('#loading_spinner').show();
            //antes de enviar la petición al fichero PHP, mostramos mensaje
            $("#smg").html("Validando...");
          },
          success:  function (response) {
              
            $("#smg2").html(response);
            $('#modal2').modal('show');
          }});
        document.getElementById("clave").disabled=true;
        document.getElementById("clave2").disabled=true;
        document.getElementById("clave3").disabled=true;

        datos_clave_usuario.value="Editar";
      }else {
         $('#modal2').modal('show');
         document.getElementById("smg2").innerHTML='Las contraseña ingresadas no coinciden ';
      }
    }else{
       $('#modal2').modal('show');
       document.getElementById("smg2").innerHTML='la contraseña del usuario no coincide';
    }
  }
});
/****************************************************************************/
$(document).on('click','#datos_perfil',function(e){
e.stopPropagation();
e.preventDefault();

  if(datos_clave.value == "Editar"){
    document.getElementById("selectRol").disabled=false;
    document.getElementById("usuario").disabled=false;
    document.getElementById("selectEstado").disabled=false;
    datos_clave.value="Cambiar";
  }else{


    var rol =document.getElementById("selectRol").value;
    var usuario =document.getElementById("usuario").value;
    var estado =document.getElementById("selectEstado").value;
    var id=document.getElementById("idHidden").value;
    var params = { "usuario" : usuario, "rol" : rol , "estado" : estado,"id" : id};
    $.ajax({
      data:   params,
      url:   '../controller/route/perfil.php',
      type:  'post',
      beforeSend: function () {
        //mostramos gif "cargando"
        //jQuery('#loading_spinner').show();
        //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg").html("Validando...");
      },
      success:  function (response) {

        $("#smg").html(response);
        $('#modal1').modal('show');
      }});
      document.getElementById("selectRol").disabled=true;
      document.getElementById("usuario").disabled=true;
      document.getElementById("selectEstado").disabled=true;
    datos_clave.value="Editar";
  }
});
/****************************************************************************/
$(document).on('click','#datos_foto',function(e){
e.stopPropagation();
e.preventDefault();

  if(datos_clave.value == "Editar"){
    document.getElementById("selectRol").disabled=false;
    document.getElementById("usuario").disabled=false;
    document.getElementById("selectEstado").disabled=false;
    datos_clave.value="Cambiar";
  }else{


    var rol =document.getElementById("selectRol").value;
    var usuario =document.getElementById("usuario").value;
    var estado =document.getElementById("selectEstado").value;
    var id=document.getElementById("idHidden").value;
    var params = { "usuario" : usuario, "rol" : rol , "estado" : estado,"id" : id};
    $.ajax({
      data:   params,
      url:   '../controller/route/perfil.php',
      type:  'post',
      beforeSend: function () {
        //mostramos gif "cargando"
        //jQuery('#loading_spinner').show();
        //antes de enviar la petición al fichero PHP, mostramos mensaje
        $("#smg").html("Validando...");
      },
      success:  function (response) {

        $("#smg").html(response);
        $('#modal1').modal('show');
      }});
      document.getElementById("selectRol").disabled=true;
      document.getElementById("usuario").disabled=true;
      document.getElementById("selectEstado").disabled=true;
    datos_clave.value="Editar";
  }
});
