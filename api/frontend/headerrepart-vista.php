<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../principal.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
  <link rel="shortcut icon" href="image/ikura.ico">
</head>
<body class="body">
  <header>
    <div class="container">
      <div class="row bg">
        <div class="col col-12">
          <nav class="navbar body">
            <ul class="nav justify-content-center text-center">
              <li class="nav-item">
                <img src="image/ikura.png" style="width:50; height:50;" >
                <a href="principal" class="navbar-brand">
                  <?php echo("Buen día ".utf8_encode($_SESSION['usuarios']).". Usted se ha conectado como ".utf8_encode($_SESSION['tipo']));?>
                </a>
              </li>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="flaticons/acciones.svg" style="width:32px; height:32px;"></a>
                <div class="dropdown-menu abajo">
                  <center><a href="principal" class="dropdown-nav-item menu abajo"><img src="flaticons/home.svg" style="width:25px; height:25px;"></a> Página principal</center>
                  <br>
                  <center><a href="cerrar" class="dropdown-nav-item reservacion abajo"><img src="flaticons/close.svg" style="width:25px; height:25px;"> Cerrar sesión</a></center>
                </div>
              </li>
              <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="flaticons/restaurant.svg" style="width:32px; height:32px;"></a>
                <div class="dropdown-menu abajo">
                  <center><a href="tabla_menu" class="dropdown-nav-item menu abajo"><img src="flaticons/menu.svg" style="width:25px; height:25px;"> Menú</a></center>
                  <center><a href="comedor_cajas" class="dropdown-nav-item reservacion abajo"><img src="flaticons/cajas.svg" style="width:25px; height:25px;"> Comedor/cajas</a></center>
                  <center><a href="tabla_sucursal" class="dropdown-nav-item reservacion abajo"><img src="flaticons/sucursales.svg" style="width:25px; height:25px;"> Sucursales</a></center>
                </div>
              </li>
              <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="flaticons/administration.svg" style="width:32px; height:32px;"></a>
                <div class="dropdown-menu abajo">
                  <center><a href="personas" class="dropdown-nav-item reservacion abajo"><img src="flaticons/people.svg" style="width:25px; height:25px;"> Personas</a></center>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</body>
</html>
