<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."conductorController.php");
require_once(CONTROLLER_PATH."vehiculoController.php");
require_once(CONTROLLER_PATH."clienteController.php");
require_once(VISTAS_PATH."recursosPHP/Colombia.php");
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
              <h3 >Accede a cualquier panel en caso de querer agregrar algun elemento nuevo.</h3>
              <button type="button" id="vehiculos_main" class="btn btn-success">Vehiculos </button>&nbsp&nbsp
              <button type="button" id="clientesVista"  class="btn btn-success">Clientes </button>&nbsp&nbsp
              <button type="button" id="conductor_main" class="btn btn-success">Conductores </button>&nbsp&nbsp

            </div>
            <br>
            <div class="input-group-btn">
              <label>Listado de Clientes Registrados</label>
              <?php
              $objCliente= new clienteController();
              $arrayObj = array();
              $arrayObj = $objCliente->listaClientesActivos();
              if(is_null( $arrayObj) ){
                echo "<span>No hay clientes Registrados .</span>";
                echo "<button type='button' id='clientesVista' class='btn btn-success'>Clientes </button><br>";
              }else{
                echo "<select class='form-control'>";
                foreach ($arrayObj as $clave => $valor) {
                  echo "<option value='".$arrayObj[$clave]->getId_cliente()."'>".$arrayObj[$clave]->getNombre()." - ".$arrayObj[$clave]->getRazon_social()."</option>";
                }
                echo "</select>";}
                ?>
              </div>

              <hr>
              <div class="form-group ">
                <label>Listado de Vehiculos Registrados </label>
                <?php
                $objVehiculo= new vehiculoController();
                $arrayObj1 = array();
                $arrayObj1 = $objVehiculo->listaVehiculos();
                if(is_null( $arrayObj1) ){
                  echo "<span>No hay vehiculos Registrados .</span>";
                  echo "<button type='button' id='vehiculos_main' class='btn btn-success'>Vehiculos </button>";
                }else{
                  echo "<select class='form-control'>";
                  foreach ($arrayObj1 as $clave => $valor) {
                    $ob = $objCliente->clienteId($arrayObj[$clave]->getId_cliente() );
                    echo "<option value='".$arrayObj1[$clave]->getId_vehiculo()."'>vehiculo placa : ".$arrayObj1[$clave]->getPlaca()."   (".$ob->getRazon_social()." - ".$ob->getNombre().")</option>";
                  }
                  echo "</select>";
                }
                ?>
                <p class="help-block">utilize esta opcion si desea cargar un nuevo vehiculo.</p>
                <button type="button" id="cargar_Conductor_Servicio" class="btn btn-success">Cargar Vehiculo</button>
              </div>
              <hr>
              <div class="form-group ">
                <label>Listado de Conductores Registrados </label>
                <?php
                $objConductor= new conductorController();
                $arrayObj2 = array();
                $arrayObj2 = $objConductor->listaConductor();
                if(is_null( $arrayObj2) ){
                  echo "<span>No hay conductores Registrados .</span>";
                  echo "<button type='button' id='conductores_main' class='btn btn-success'>Conductores </button>";
                }else{
                  echo "<select class='form-control'>";
                  foreach ($arrayObj2 as $clave => $valor) {
                    echo "<option value='".$arrayObj2[$clave]->getId_conductor()."'>".$arrayObj2[$clave]->getNombre_conductor()."</option>";
                  }
                  echo "</select>";
                }

                ?>
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

              <?php
              $objColombia= new colombia();
              $objColombia->departamentos( );?>
              <div id="select_departamento"  class="form-group col-xs-3" ></div>
              <div id="select_municipio" class="form-group col-xs-3">
                <label>Municipios Origen </label>
                <select class="form-control ">
                  <option value="">SIN SELECCION</option>
                </select>
              </div>

              <?php
              $objColombia= new colombia();
              $objColombia->departamentos2();?>
              <div id="select_departamento2"  class="form-group col-xs-3"></div>
              <div id="select_municipio2" class="form-group col-xs-3">
                <label>Municipios Destino </label>
                <select class="form-control ">
                  <option value="">SIN SELECCION</option>
                </select>
              </div>

              <div class="form-group">
                <label>Direccion de descargue</label>
                <input type="text" class="form-control" placeholder="Direccion de Descargue ...">
              </div>
              <div class="form-group">
                <label>Ruta</label>
                <textarea class="form-control" rows="3" placeholder="Ruta ..."></textarea>
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
                <input type="text" class="form-control" placeholder="Satelital ...">
              </div>
              <div class="form-group col-xs-2">
                <label>Sello</label>
                <input type="text" class="form-control" placeholder="Sello ...">
              </div>
              <div class="form-group col-xs-5">
                <label>N Contenedor</label>
                <input type="text" class="form-control" placeholder="Contenedor ...">
              </div>
              <div class="form-group">
                <label>Link Localizador</label>
                <input type="text" class="form-control" placeholder="Localizador ...">
              </div>
              <br>
              <div class="form-group col-xs-6">
                <label>Usuario</label>
                <input type="text" class="form-control" placeholder="Usuario ...">
              </div>
              <div class="form-group col-xs-6">
                <label>Clave</label>
                <input type="text" class="form-control" placeholder="Clave ...">
              </div>

              <div class="form-group col-xs-6">
                <label for="exampleInputFile">Foto parte Frontal</label>
                <input  class="btn btn-warning btn-lg" name="file-input" id="file-input" type="file"  onchange="readURL(this);" accept="image/*" >
                <p class="help-block">foto #1 obligatorio.</p>
                <div class="file-upload-content">
                  <img class="file-upload-image" src="../resources/images/cargar.jpg" alt="your image" height="200" width="200" />
                  <div class="image-title-wrap">
                    <button id="boton_subir_imagen" class="btn btn-warning btn-lg" type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Imagen cargarda</span></button>
                  </div>
                </div>
              </div>
              <div class="form-group col-xs-6">
                <label for="exampleInputFile">Foto parte trasera</label>
                <input class="btn btn-danger btn-lg" name="file-input2" id="file-input2" type="file"  onchange="readURL2(this);" accept="image/*" >
                <p class="help-block">foto #2 obligatorio.</p>
                <div class="file-upload-content2">
                  <img class="file-upload-image2" src="../resources/images/cargar.jpg" alt="your image" height="200" width="200" />
                  <div class="image-title-wrap2">
                    <button class="btn btn-danger btn-lg" type="button" onclick="removeUpload2()" class="remove-image">Remover <span class="image-title2">Imagen cargarda</span></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-footer">
            <button type="button" class="btn btn-primary">Registrar servicio</button>
            <button type="button" class="btn btn-primary">Limpiar Campos</button>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
