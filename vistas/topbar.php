<header class="header">
  <a href="index.html" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    <h3 class="header">SEGCONTROL GPS</h3>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->

        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span><?php echo "".$sesion_nombre ?> <i class="caret"></i></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header bg-light-blue">
              <?php
               if(strcmp($sesion_rol,"administrador")==0 || strcmp($sesion_rol,"asistente")==0){
                  echo "<img src=".$sesion_foto." class='img-circle' alt='User Image' />";
                } ?>
              <p>
                <?php echo $sesion_nombre."<br>".$sesion_rol ?>

              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a id="perfil" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a id="cerrarSesion" class="btn btn-default btn-flat">Cerrar sesion</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
