<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../principal.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
  <title>Ikura Sushi & Grill - Página principal</title>
  <link rel="shortcut icon" href="image/ikura.ico">
</head>
<body class="body">
  <?php
  if(utf8_encode($_SESSION['tipo']) =="Administrador o dueño"){
    require_once("headeradmin.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 text-center">
        <form action="consulta_tabla_sucursal" method="post" class="form-body">
          <h1><p class="text-center" style="color:#ff0000;">Registro de sucursales</p></h1>
          <div class="form-group">
            <label for="nombre" style="color:#ff0000;">Nombre de la sucursal a consultar: </label>
            <input type="text" name="sucursal" id="sucursal" class="form-control-text form">
          </div>
          <button type="submit" name="consultarsucursal" class="button"><img src="flaticons/eye.svg" style="width:40px; height:40px; background-color:#ffffff;" ></button>
        </form>
        <a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;"></button></a>
      </div>
    </div>
  </div>
  <br>
  <?php
  require_once("footer.php");
}
  if($_SESSION['tipo'] =="Gerente" || $_SESSION['tipo'] =="Subgerente"){
  ?>
  <header>
    <div class="container">
      <div class="row bg">
        <div class="col col-12">
          <nav class="navbar body">
            <ul class="nav justify-content-center text-center">
              <li class="nav-item">
                <img src="image/ikura.png" style="width:50; height:50;" >
                <a href="principal" class="navbar-brand">
                  <?php echo("Buen día ".$_SESSION['usuarios']." Usted se ha conectado como ".$_SESSION['tipo']);?>
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
                  <center><a href="facturar" class="dropdown-nav-item reservacion abajo"><img src="flaticons/facturar.svg" style="width:25px; height:25px;"> Facturar</a></center>
                  <center><a href="cosas_faltantes" class="dropdown-nav-item reservacion abajo"><img src="flaticons/cosas_faltantes.svg" style="width:25px; height:25px;"> Cosas Faltantes</a></center>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 offset-sm-3 text-center">
        <form action="consulta_tabla_sucursal" method="post" class="form-body">
          <h1><p class="text-center" style="color:#ff0000;">Registro de sucursales</p></h1>
          <div class="form-group">
            <label for="nombre" style="color:#ff0000;">Nombre de la sucursal a consultar: </label>
            <input type="text" name="sucursal" id="sucursal" class="form-control-text form">
          </div>
          <button type="submit" name="consultarsucursal" class="button"><img src="flaticons/eye.svg" style="width:40px; height:40px; background-color:#ffffff;" ><p style="color:#3a3a3c; font-size:20px;"> Mostrar</p></button>
        </form>
        <a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;"></button></a>
      </div>
    </div>
  </div>
  <br>
  <?php
  require_once("footer.php");
}
if($_SESSION['tipo'] =="Mesero(a)" || $_SESSION['tipo'] =="Cajero(a)"){
?>
<header>
  <div class="container">
    <div class="row bg">
      <div class="col col-12">
        <nav class="navbar body">
          <ul class="nav justify-content-center text-center">
            <li class="nav-item">
              <img src="image/ikura.png" style="width:50; height:50;" >
              <a href="principal" class="navbar-brand">
                <?php echo("Buen día ".$_SESSION['usuarios']." Usted se ha conectado como ".$_SESSION['tipo']);?>
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
                <center><a href="facturar" class="dropdown-nav-item reservacion abajo"><img src="flaticons/facturar.svg" style="width:25px; height:25px;"> Facturar</a></center>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3 text-center">
      <form action="consulta_tabla_sucursal" method="post" class="form-body">
        <h1><p class="text-center" style="color:#ff0000;">Registro de sucursales</p></h1>
        <div class="form-group">
          <label for="nombre" style="color:#ff0000;">Nombre de la sucursal a consultar: </label>
          <input type="text" name="sucursal" id="sucursal" class="form-control-text form">
        </div>
        <button type="submit" name="consultarsucursal" class="button"><img src="flaticons/eye.svg" style="width:40px; height:40px; background-color:#ffffff;" ><p style="color:#3a3a3c; font-size:20px;"> Mostrar</p></button>
      </form>
      <a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;"></button></a>
    </div>
  </div>
</div>
<br>
<?php
require_once("footer.php");
}
if($_SESSION['tipo'] =="Repartidor"){
?>
<header>
  <div class="container">
    <div class="row bg">
      <div class="col col-12">
        <nav class="navbar body">
          <ul class="nav justify-content-center text-center">
            <li class="nav-item">
              <img src="image/ikura.png" style="width:50; height:50;" >
              <a href="principal" class="navbar-brand">
                <?php echo("Buen día ".$_SESSION['usuarios']." Usted se ha conectado como ".$_SESSION['tipo']);?>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3 text-center">
      <form action="consulta_tabla_sucursal" method="post" class="form-body">
        <h1><p class="text-center" style="color:#ff0000;">Registro de sucursales</p></h1>
        <div class="form-group">
          <label for="nombre" style="color:#ff0000;">Nombre de la sucursal a consultar: </label>
          <input type="text" name="sucursal" id="sucursal" class="form-control-text form">
        </div>
        <button type="submit" name="consultarsucursal" class="button"><img src="flaticons/eye.svg" style="width:40px; height:40px; background-color:#ffffff;" ><p style="color:#3a3a3c; font-size:20px;"> Mostrar</p></button>
      </form>
      <a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;"></button></a>
    </div>
  </div>
</div>
<br>
<?php
require_once("footer.php");
}
?>
  <script src="../../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
