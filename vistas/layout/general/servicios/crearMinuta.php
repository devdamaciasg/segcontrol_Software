
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Nueva Minuta</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group ">
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">Cargar imagen Posicion Satelital</button>
              <input type="text" class="form-control" placeholder="foto 2 ...">
            </div>
            <div class="input-group-btn">
              <label>Evento</label>
              
                <input type="text" class="form-control" placeholder="Evento ...">

            </div>
            <div class="form-group">
              <label>Observacion</label>
              <textarea class="form-control" rows="3" placeholder="Observacion ..."></textarea>
            </div>
            <div class="form-group">
              <label>Nota</label>
              <textarea class="form-control" rows="3" placeholder="Nota ..."></textarea>
            </div>

            <hr>

          </div>
          <div class="box box-primary">
            <div class="box-footer">
              <button type="button" class="btn btn-primary">Registrar Minuta</button>
              <button type="button" class="btn btn-primary">Limpiar Campos</button>
            </div>
          </div>
        </form>
      </div>
    </div>



  </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">


        <h1>Imagen satelital</h1><br/>
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
