<?php
//require_once($_SERVER['DOCUMENT_ROOT']."/ruta");
?>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Registrar Nuevo Empleado</h3>
      </div><!-- /.box-header -->
      <div id ="mensaje"></div>
      <div class="box-body">

        <form role="form">

          <div class="form-group col-xs-8">
          <label >Nombre del Empleado</label>
           <div class="input-group">
             <input type="text" id="empleado_nombre" name="empleado_nombre" class="form-control" placeholder="nombre . . . " required>
             <span class="input-group-addon"><i class="fa fa-check"></i></span>
           </div>
          </div>

                      <div class="form-group col-xs-6 ">
                        <label for="tipo_documento">Tipo de identificacion</label>
                        <select class="form-control " id="tipo_documento" required>
                          <option value="cc" >Cedula de ciudadania</option>
                          <option value="ce">Cedula de extranjeria</option>
                          <option value="ti">Tarjeta de identidad</option>
                        </select>
                      </div>


            <div class="form-group col-xs-6">
            <label>Identificacion</label>
             <div class="input-group ">
               <input type="text" id="empleado_cedula" name="empleado_cedula" class="form-control" placeholder="identificacion . . . " required>
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>



            <div class="form-group col-xs-5">
             <label >Telefono de contacto </label>
             <div class="input-group">
               <input type="text" id="empleado_telefono1" name="conductor_telefono1" class="form-control" placeholder="telefono . . ." required>
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>
            <div class="form-group col-xs-5">
             <label >Telefono de contacto </label>
             <div class="input-group">
               <input type="text" id="empleado_telefono1" name="empleado_telefono1" class="form-control" placeholder="telefono . . ." required>
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>
            <div class="form-group col-xs-5">
             <label >Telefono de contacto 2</label>
             <div class="input-group">
               <input type="text" id="empleado_telefono2" name="empleado_telefono2" class="form-control" placeholder="telefono . . ." required>
               <span class="input-group-addon"><i class="fa fa-check"></i></span>
             </div>
            </div>

            <div class="form-group col-xs-5">
              <label >Telefono de contacto 3</label>
              <input type="text" class="form-control" id="empleado_telefono3" name="empleado_telefono3" placeholder="telefono . . ." required>
          <span class="input-group-addon"><i class="fa fa-check"></i></span>
            </div>





          <div class="box-footer col-xs-8">
            <button type="submit" class="btn btn-primary" id="guardar_conductor_main">Guardar</button>
          </div>
        </form>
</div>
    </div>
  </div>
</div>
