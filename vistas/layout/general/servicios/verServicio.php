<?php
//require_once($_SERVER['DOCUMENT_ROOT']."/ruta");
?>
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Informacion General</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div  class="input-group-btn">
              <h3 class="box-title">Panel de : </h3>
              <button type="submit" class="btn btn-success">Vehiculos </button>
              <button type="submit" class="btn btn-success">Conductores </button>
              <button type="submit" class="btn btn-success">Clientes </button>

            </div>
            <br>
            <div class="input-group-btn">
              <label>Listado de Clientes Registrados</label>
              <select class="form-control">
                <option>option 1</option>
              </select>
            </div>
            <hr>
            <div class="form-group ">
              <label>Listado de Vehiculos Registrados </label>
              <select class="form-control">
                <option>option 1</option>
              </select>
              <p class="help-block">utilize esta opcion si desea cargar un nuevo vehiculo.</p>
              <button type="button" id="cargar_Conductor_Servicio" class="btn btn-success">Cargar Vehiculo</button>
            </div>
            <hr>
            <div class="form-group ">
              <label>Listado de Conductores Registrados </label>
              <select class="form-control">
                <option>option 1</option>
              </select>
              <p class="help-block">utilize esta opcion si desea cargar un nuevo conductor</p>
              <button type="button" id="cargar_Conductor_Servicio" class="btn btn-success">Cargar Conductor</button>
            </div>
            <hr><br>
          </div><!-- /.box-body <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div> -->
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Descripcion del Viaje</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Manifiesto </label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <br>
            <div class="form-group col-xs-6">
              <label>Ciudad de Origen</label>
              <select class="form-control ">
                <option>option 1</option>
              </select>
            </div>
            <div class="form-group col-xs-6">
              <label>Ciudad de Destino</label>
              <select class="form-control ">
                <option>option 1</option>
                <option></option>
              </select>
            </div>
            <div class="form-group">
              <label>Direccion de descargue</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <div class="form-group">
              <label>Ruta</label>
              <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <hr>

          </div><!-- /.box-body <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div> -->
        </form>
      </div>
    </div>
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Seguridad</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group col-xs-5">
              <label>Satelital</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <div class="form-group col-xs-2">
              <label>Sello</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <div class="form-group col-xs-5">
              <label>N Contenedor</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <div class="form-group">
              <label>Link Localizador</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <br>
            <div class="form-group col-xs-6">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
            <div class="form-group col-xs-6">
              <label>Clave</label>
              <input type="text" class="form-control" placeholder="Manifiesto ...">
            </div>
              <div class="form-group ">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Cargar imagen frontal</button>
            <input type="text" class="form-control" placeholder="foto 1 ...">
            </div>
              <div class="form-group ">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Cargar imagen Trasera</button>
            <input type="text" class="form-control" placeholder="foto 2 ...">
            </div>
            <hr/><br>

          </div>
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-primary">
            <div class="box-footer">
            <button type="button" class="btn btn-primary">Actualizar servicio</button>

          </div>
      </div>
    </div>
  </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Modal Header</h4>
       </div>
       <div class="modal-body">


                           <h1>Imagen</h1><br/>
                   		<hr>
                   	        <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                   			<div id="image_preview"><img id="previewing" src="<?php echo '../assets/img/noimage.png' ?>" /></div>
                   	        	<hr id="line">
                   				<div id="selectImage">
                   					<label>selecciona la imagen</label><br/>
                   	                		<input type="file" name="file" id="file" required />
                   					<input type="submit" value="Upload" class="submit" />
                   	       </div>
                   		</form>

                   	<h4 id='loading' ><img src="<?php echo '../assets/img/loading_circle.gif' ?>" />&nbsp;&nbsp;Loading...</h4>
                   	<div id="message"></div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
<script>

$("#file").change(function() {
$("#message").empty();         // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;

var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
    else
{
        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(this.files[0]);
    }

});

function imageIsLoaded(e) {
  console.log('y');
  $("#file").css("color","green");
      $('#image_preview').css("display", "block");
      $('#previewing').attr('src', e.target.result);
  $('#previewing').attr('width', '250px');
  $('#previewing').attr('height', '230px');
}

</script>
