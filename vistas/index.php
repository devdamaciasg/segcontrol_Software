
<!DOCTYPE html>
<html class="bg-black fondo ">
    <?php require_once("head.php");?>

    <body class="bg-black fondo "  onload="time()">

        <div class="form-box " id="login-box">

            <div class="header">PLATAFORMA <br>SEGCONTROL GPS <br><strong>Iniciar sesión</strong></div>
            <form  method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario ..."/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña ..."/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Recordar sesion
                    </div>
                    <div id="smg" ></div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block"
                    id="validarSesion" name="validarSesion"  >Validar</button>

                    <p><a id="olvidoClave" href="#" name="olvidoClave" >Olvide mi contraseña !</a></p>


                </div>
            </form>

        </div>


      <?php require_once("footer.php");?>
      <script type="text/javascript">
      time();
      function time(){
        var tiempo = new Date();
        var hora = tiempo.getHours();
        var minuto = tiempo.getMinutes();
        var segundo = tiempo.getSeconds();
        var carga =hora+":"+minuto;

        if(carga = '17:50'){
        document.getElementById('smg').innerHTML ='Cargando en servidor 51%';
      }else {
        if (carga = '16:40') {
          document.getElementById('smg').innerHTML ='Cargando en servidor 67%';
        }else {
          if (carga = '20:10') {
            document.getElementById('smg').innerHTML ='Cargando en servidor 71%';
          }else {
            if (carga = '22:10') {
              document.getElementById('smg').innerHTML ='Cargando en servidor 83%';
            }
          }
        }
      }

    }
      function cargando(){
        alert('cargando plataforma espere');
      }
      </script>
    </body>
</html>
