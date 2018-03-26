<?php
//require_once($_SERVER['DOCUMENT_ROOT']."/ruta");
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registrar Nuevo Conductor</h3>
      </div><!-- /.box-header -->
      <div id ="mensaje"></div>
      <div class="box-body">
        <form role="form">
          <div class="box-body">
            <div class="form-group">
            <label >Documento de Identificacion</label>
             <div class="input-group">
               <input type="text" id="conductor_cedula" name="conductor_cedula" class="form-control">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
            <label >Nombre del Conductor</label>
             <div class="input-group">
               <input type="text" id="conductor_nombre" name="conductor_nombre" class="form-control">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
             <label >Telefono de contacto </label>
             <div class="input-group">
               <input type="text" id="conductor_telefono1" name="conductor_telefono1" class="form-control">
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group">
              <label >Telefono de contacto #2</label>
              <input type="text" class="form-control" id="conductor_telefono2" name="conductor_telefono2" placeholder="telefono">
              <p class="help-block">Opcional.</p>
            </div>

            <div class="form-group">
              <label >Telefono de contacto #3</label>
              <input type="text" class="form-control" id="conductor_telefono3" name="conductor_telefono3" placeholder="telefono">
              <p class="help-block">Opcional.</p>
            </div>

          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" id="guardar_conductor_main">Guardar</button>
          </div>
        </form>
      </div><!-- /.box-body -->
    </div>
  </div>
