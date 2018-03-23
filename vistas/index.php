
<!DOCTYPE html>
<html class="bg-black">
    <?php require_once("head.php");?>

    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Iniciar sesión</div>
            <form  method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario ..."/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña ..."/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Recordarme
                    </div>
                    <div id="smg"></div>
                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block"
                    id="validarSesion" name="validarSesion" >Validar</button>

                    <p><a id="olvidoClave" href="#" name="olvidoClave" >Olvide mi contraseña !</a></p>

                    <a id="registrar" href="#" name="registrar" class="text-center">Registrar </a>
                </div>
            </form>

        </div>


      <?php require_once("footer.php");?>
    </body>
</html>
