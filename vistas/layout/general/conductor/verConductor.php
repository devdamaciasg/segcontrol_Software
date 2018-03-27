<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/conductorController.php");
$id_conductor = $_POST['id'];
$objConductor = new conductorController();
$var = new conductorController();
$var=$objConductor->ConductorId($id_conductor);
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Informacion :  Conductor</h3>
      </div><!-- /.box-header -->
      <div id ="mensaje"></div>
      <div class="box-body">
        <form role="form">
          <div class="box-body">
            <div class="form-group">
            <label >Documento de Identificacion</label>
             <div class="input-group">
               <input type="text" id="conductor_cedula" name="conductor_cedula"  value="<?php echo $var->getCedula()?>" class="form-control" placeholder="cedula">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
            <label >Nombre del Conductor</label>
             <div class="input-group">
               <input type="text" id="conductor_nombre" name="conductor_nombre" value="<?php echo $var->getNombre_conductor()?>" class="form-control" placeholder="nombre">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
             <label >Telefono de contacto </label>
             <div class="input-group">
               <input type="text" id="conductor_telefono1" name="conductor_telefono1" value="<?php echo $var->getTelefono1()?>" class="form-control" placeholder="telefono">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
              <label >Telefono de contacto #2</label>
              <input type="text" class="form-control" id="conductor_telefono2" name="conductor_telefono2"  value="<?php echo $var->getTelefono2()?>" placeholder="telefono">

            </div>

            <div class="form-group">
              <label >Telefono de contacto #3</label>
              <input type="text" class="form-control" id="conductor_telefono3" name="conductor_telefono3" value="<?php echo $var->getTelefono3()?>" placeholder="telefono">

            </div>

          </div><!-- /.box-body -->

          <div class="box-footer">
            <input type="submit" class="btn btn-primary" id="editar_conductor_main" value="Editar"/>
            <div id="opciones_verConductor">
            <input type="submit" class="btn btn-primary" id="actualizar_conductor_main" value="Actualizar"/>
            </div>
          </div>
        </form>
      </div><!-- /.box-body -->
    </div>
  </div>
