<?php
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/clienteController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/vehiculoController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/controller/conductorController.php");
require_once($_SERVER['DOCUMENT_ROOT']."/segcontrol/vistas/recursosPHP/Colombia.php");

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
                    echo "</select>";
               }

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
    <input type="hidden" name="muni" id="muni"  value="">
<?php
          $objColombia= new colombia();
          $objColombia->departamentos("Departamentos","cargar()","departamento1" );
          echo "<div id'origen' >

          <div class='form-group col-xs-3'>
                 <label>Departamentos</label>
                 <select class='form-control' id='municipio' name='municipio'>
                    <option value='sin Seleccion'>Seleccione </option>
                 </select>
           </div> </div>";
          $objColombia->departamentos("Departamentos","cargar2()","departamento2" );
          echo "<div id'destino' >

          <div class='form-group col-xs-3'>
                 <label>Municipios</label>
                 <select class='form-control' id='municipio' name='municipio'>
                    <option value='sin Seleccion'>Seleccione </option>
                 </select>
           </div> </div>";

?>

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
            <button type="button" class="btn btn-primary">Registrar servicio</button>
            <button type="button" class="btn btn-primary">Limpiar Campos</button>
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
