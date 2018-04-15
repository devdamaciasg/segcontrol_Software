<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/directorio.php');
require_once(CONTROLLER_PATH."conductorController.php");
require_once(CONTROLLER_PATH."vehiculoController.php");
require_once(CONTROLLER_PATH."clienteController.php");
require_once(CONTROLLER_PATH."serviciosController.php");
require_once(VISTAS_PATH."recursosPHP/Colombia.php");

$id = $_POST['id'];

$objServicio = new serviciosController();
$var=$objServicio->serviciosPorId($id);
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
                echo "<option value='".$var->getId_cliente()."'>".$objCliente->clienteId($var->getId_cliente())->getNombre()." - ".$objCliente->clienteId($var->getId_cliente())->getRazon_social()."</option>";
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
                  echo "<option value='".$var->getId_vehiculo()."'>vehiculo placa : ".$objVehiculo->vehiculoId($var->getId_vehiculo())->getPlaca()."  </option>";
                  foreach ($arrayObj1 as $clave => $valor) {
                    $ob = $objCliente->clienteId($arrayObj[$clave]->getId_cliente() );
                    echo "<option value='".$arrayObj1[$clave]->getId_vehiculo()."'>vehiculo placa : ".$arrayObj1[$clave]->getPlaca()."   (".$ob->getRazon_social()." - ".$ob->getNombre().")</option>";
                  }
                  echo "</select>";
                }
                ?>

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
                <input type="text" class="form-control" placeholder="Manifiesto ..."  value="<?php echo $var->getManifiesto() ?>">
              </div>
              <br>

              <?php
              
              $objColombia= new colombia();
              $objColombia->departamentos();?>
              <div id="select_municipio" class="form-group col-xs-3">
                <label>Municipios Origen </label>
                <select class="form-control ">
                  <option value="">SIN SELECCION</option>
                </select>
              </div>

              <?php
              $objColombia= new colombia();
              $objColombia->departamentos2();?>
              <div id="select_municipio2" class="form-group col-xs-3">
                <label>Municipios Destino </label>
                <select class="form-control ">
                  <option value="">SIN SELECCION</option>
                </select>
              </div>

              <div class="form-group">
                <label>Direccion de descargue</label>
                <input type="text" class="form-control" placeholder="Direccion de Descargue ..."   value="<?php echo $var->getDireccion_descargue()?> " >
              </div>
              <div class="form-group">
                <label>Ruta</label>
                <textarea class="form-control" rows="3" placeholder="Ruta ..." value="<?php $var->getRuta() ?> "></textarea>
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
                <input type="text" class="form-control" placeholder="Satelital ..." value="<?php $var->getSatelital() ?> ">
              </div>
              <div class="form-group col-xs-2">
                <label>Sello</label>
                <input type="text" class="form-control" placeholder="Sello ..."   value="<?php $var->getSello()?> ">
              </div>
              <div class="form-group col-xs-5">
                <label>N Contenedor</label>
                <input type="text" class="form-control" placeholder="Contenedor ..."  value="<?php $var->getNumero_contenedor()?> ">
              </div>
              <div class="form-group">
                <label>Link Localizador</label>
                <input type="text" class="form-control" placeholder="Localizador ..."  value="<?php $var->getLink_localizador()?> ">
              </div>
              <div class="form-group col-xs-6">
                <label>Usuario</label>
                <input type="text" class="form-control" placeholder="Usuario ..." value="<?php $var->getUsuario_satelital()?> ">
              </div>
              <div class="form-group col-xs-6">
                <label>Clave</label>
                <input type="text" class="form-control" placeholder="Clave ..." value="<?php $var->getClave_satelital()?> ">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-footer">
            <button type="button" class="btn btn-primary">Editar servicio</button>
            <button type="button" class="btn btn-primary">Regresar</button>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
