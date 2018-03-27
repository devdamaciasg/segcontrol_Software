
<div id="contendor_dinamico_main" >
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Lista de Minutas Registrados</h3>
          <br><br><br>
          <div id ="mensaje"></div>
          <div class="box-body">
            <div class="input-group">
              <input type="text" name="table_search" id="table_search" class="form-control input-sm pull-right col-xs-8" style="width: 300px;" placeholder="Buscar . . .">
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default" id="buscar_conductor_main"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <div class="box-tools">
              <a class="btn btn-app" id="agregar_servicio_main"><i class="fa fa-edit"></i>Nuevo Minuta</a>
              <br>
              <br>
              <div class="btn-group">
                <button type="button" class="btn btn-primary">Listados por Estados</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" id="todos_servicio_listado">Criticas</a></li>
                  <li class="divider"></li>
                  <li><a href="#" id="activos_servicio_listado">Warning</a></li>
                  <li><a href="#" id="cerrados_servicio_listado">en Tiempo</a></li
                </ul>
              </div>
               &nbsp&nbsp&nbsp&nbsp&nbsp
              <input type="button" id="exportar_excel_servicio_main" class="btn btn-success" value="Exportar a PDF"/>
              &nbsp
              <input type="button" id="exportar_pdf_servicio_main" class="btn btn-success" value="Exportar a EXCEL"/>
            <br><br>
            </div>
            <!-- /.box-header -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Lista de Minutas Asociadas al Servicio</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Fecha</th>
                    <th>Evento</th>
                    <th>Observacion</th>
                    <th>Localizacion</th>
                    <th>Nota</th>
                    <th>Actualizar</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>01-02-2018 00:00:00</td>
                    <td>en parqueadero</td>
                    <td>el vehiculo esta inmovil esperando salidad</td>
                    <td>link</td>
                    <td>nota</td>
                    <td><button >Actualizar</button></td>
                  </tr>
                </tbody></table>
              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
            </div>
          </div><!-- /.box-body -->
        </div>
      </div>

    </div>

  </div>
  <script type="text/javascript" src="../assets/js/AdminLTE/servicios.js"></script>
  <script type="text/javascript" src="../assets/js/AdminLTE/bitacora.js"></script>
