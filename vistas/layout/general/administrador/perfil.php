<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."usuariosController.php");
//var get....
$sesion=$_GET["sesion"];
$rol=$_GET["rol"];
$usuario=$_GET["usuario"];
$clave=$_GET["clave"];
$estado=$_GET["estado"];
///
$objController=new usuariosController();
$arrayObj=$objController->PerfilEmpleado($sesion);
?>
<input id="idHidden" name="idHidden" type="hidden" value="<?php echo $sesion ?>" />
<input id="claveHidden" name="claveHidden" type="hidden" value="<?php echo $clave ?>" />
<div class="row">
  <div class="alert alert-info" style="margin-bottom: 0!important;">
    <i class="fa fa-info"></i>
    <b>Nota:  </b> aqui podras visualizar toda la informacion personal y de acceso del usuario .
    <br><div ></div>
  </div>
  <br>
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Datos de acceso al sistema del usuario  </h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group ">
            <label for="selectRol">Rol  </label>
            <select class="form-control " id="selectRol" disabled>
              <option value="<?php echo $rol; ?>" ><?php echo $rol; ?></option>
              <option value="administrador">ADMINISTRADOR</option>
              <option value="asistente">ASISTENTE</option>
            </select>
          </div>

          <div class="form-group ">
            <label for="usuario">Usuario  </label>
            <input class="form-control " type="text" id="usuario" value="<?php echo $usuario ?>" placeholder="Usuario . . ." disabled >
          </div>

          <div class="form-group ">
            <label for="selectEstado">Estado </label>
            <select class="form-control " id="selectEstado" disabled>
              <option value="<?php echo $estado; ?>" ><?php echo $estado; ?></option>
              <option value="activo">ACTIVO</option>
              <option value="inactivo">INACTIVO</option>
            </select>
          </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
          <input type="submit" id="datos_usuario" class="btn btn-primary"  value="Editar">
        </div>
      </form>
      <!-- Modal --><div id="modal1" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mensaje</h4>
      </div>
      <div class="modal-body">
        <p id="smg">.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
    </div><!-- /.box -->

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Cambio de Contraseña </h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <p class="help-block">Ingresa tu  contraseña actual!</p>
          <div class="form-group ">
            <input type="password"  id="clave" class="form-control"  placeholder="contraseña actual . . ." disabled>
          </div>

          <p class="help-block">Ingresa tu nueva contraseña.</p>
          <div class="form-group ">
            <input type="password" id="clave2" class="form-control"  placeholder="nueva contraseña . . ." disabled>
          </div>

          <div class="form-group ">
            <label for="selectRol">Repite de nuevo la contraseña </label>
            <input type="password"  id="clave3" class="form-control"  placeholder="nueva contraseña . . ." disabled>
          </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
          <input type="submit" id="datos_clave_usuario" class="btn btn-primary"  value="Editar">

        </div>
      </form>

      <div id="modal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Mensaje</h4>
            </div>
            <div class="modal-body">
              <p id="smg2">.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
    </div><!-- /.box -->
</div>
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Foto de perfil </h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <p class="help-block">Foto Actual de perfil 215x215.</p>
          <div class="form-group ">
            <img src="<?php echo $arrayObj['foto']; ?>" />
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Elige la nueva foto de perfil</label>
            <input type="file" id="exampleInputFile">

          </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <input type="submit" id="datos_foto" class="btn btn-primary"  value="Editar">

        </div>
      </form>
      <div id="modal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Mensaje</h4>
            </div>
            <div class="modal-body">
              <p id="smg">.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
    </div><!-- /.box -->
  </div><!--/.col (left) -->
</div>

  <div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Datos Personales </h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group ">
            <label >Nombre del empleado  </label>
            <input class="form-control " type="text" value="<?php echo $arrayObj['nombre']; ?>" placeholder="Nombre . . ." disabled>
          </div>

          <div class="form-group ">
            <label >Tipo de Documento  </label>
            <select class="form-control " disable>
              <?php
                 if($arrayObj['tipo_documento'] == "cc"){
                   echo "<option value='cc' >Cedula de ciudadania</option>";
                 }else{
                   if($arrayObj['tipo_documento'] == "ce"){
                      echo "<option value='ce' >Cedula de extranjeria</option>";
                   }else{
                       echo "<option value='ti' >Tarjeta de identidad</option>";
                   }
                 }

              ?>
              <option value="cc" >Cedula de ciudadania</option>
              <option value="ce">Cedula de extranjeria</option>
              <option value="ti">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="form-group ">
            <label >Numero de documento </label>
            <input class="form-control "  value="<?php echo $arrayObj['numero_documento']; ?>" type="text" placeholder="numero de documento . . ." disabled>
          </div>
          <div class="form-group ">
            <label >Direccion </label>
            <input class="form-control "  value="<?php echo $arrayObj['direccion']; ?>" type="text" placeholder="Direccion . . ." disabled>
          </div>
          <div class="form-group ">
            <label >Ciudad </label>
            <input class="form-control " value="<?php echo $arrayObj['ciudad']; ?>" type="text" placeholder="Ciudad . . ." disabled>
          </div>

          <div class="form-group ">
            <label >Fijo </label>
            <input class="form-control " value="<?php echo $arrayObj['direccion']; ?>" type="text" placeholder="Fijo Telefonico . . ." disabled>
          </div>
          <div class="form-group ">
            <label >celular #1 </label>
            <input class="form-control "  value="<?php echo $arrayObj['celular1']; ?>" type="text" placeholder="Celular . . ." disabled>
          </div>
          <div class="form-group ">
            <label >celular #2 </label>
            <input class="form-control " type="text" value="<?php echo $arrayObj['celular1']; ?>"  placeholder="Celular . . ." disabled>
          </div>
          <div class="form-group ">
            <label >celular #3 </label>
            <input class="form-control " type="text" value="<?php echo $arrayObj['celular3']; ?>" placeholder="Celular . . ." disabled>
          </div>
          <div class="form-group ">
            <label >Email </label>
            <input class="form-control " type="text" value="<?php echo $arrayObj['email']; ?>" placeholder="nombre@empresa.com  . . ." disabled>
          </div>

        </div><!-- /.box-body -->

        <div class="box-footer">
            <input type="submit" id="datos_perfil" class="btn btn-primary"  value="Editar">
        </div>
      </form>
      <div id="modal4" class="modal fade" role="dialog">
        <div class="modal-dialog">


          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Mensaje</h4>
            </div>
            <div class="modal-body">
              <p id="smg">.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>

        </div>
    </div>

  </div><!--/.col (left) -->




</div>
<script type="text/javascript" src="../assets/js/AdminLTE/perfil.js"></script>
