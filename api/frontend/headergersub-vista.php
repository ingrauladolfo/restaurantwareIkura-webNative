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
    <nav class="navbar navbar-expand-lg navbar-light body">
      <center>
        <a class="navbar-brand" href="#">
          <img src="image/ikura.png" style="width:50; height:50;">
          <?php echo("Conectado como: ".utf8_encode($_SESSION['tipo']));?>
        </a>
      </center>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
        <center>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 abajo">
            <li class="nav-item active">
              <a class="nav-link" href="principal">Inicio <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </center>
      </div>

      <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
        <center>
          <ul class="navbar-nav mr-auto abajo">
            <li class="nav-item dropdown abajo">
              <a class="nav-link dropdown-toggle menu abajo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="flaticons/acciones.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Acciones</p>
              </a>
              <div class="dropdown-menu abajo" aria-labelledby="navbarDropdown" >
                <center><a class="dropdown-nav-item reservacion abajo" href="principal"><img src="flaticons/home.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Ventana principal</p></a></center>
                <center><a class="dropdown-nav-item reservacion abajo" href="cerrar"><img src="flaticons/close.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Cerrar</p></a></center>

              </div>
            </li>
            <li class="nav-item dropdown abajo">
              <a class="nav-link dropdown-toggle menu abajo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="flaticons/restaurant.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Restaurante</p>
              </a>
              <div class="dropdown-menu abajo" aria-labelledby="navbarDropdown" >
                <center><a href="menu" class="dropdown-nav-item reservacion abajo"><img src="flaticons/menu.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Menú</p></a></center>
                <center><a href="comedor_cajas" class="dropdown-nav-item reservacion abajo"><img src="flaticons/cajas.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Cajas</p></a></center>
                <center><a href="sucursales" class="dropdown-nav-item reservacion abajo"><img src="flaticons/sucursales.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Sucursales</p></a></center>
                <center><a href="clientes" class="dropdown-nav-item reservacion abajo"><img src="flaticons/clientes.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Comenzales</p></a></center>
                <center><a href="facturar" class="dropdown-nav-item reservacion abajo"><img src="flaticons/facturar.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Facturar</p></a></center>
                <center><a href="colaboradores" class="dropdown-nav-item reservacion abajo"><img src="flaticons/colaborador.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Personal</p></a></center>
                <center><a href="pase_lista" class="dropdown-nav-item reservacion abajo"><img src="flaticons/pase_lista.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Pase de lista</p></a></center>
              </div>
            </li>
            <li class="nav-item dropdown abajo">
              <a class="nav-link dropdown-toggle menu abajo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="flaticons/administration.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Administración</p>
              </a>
              <div class="dropdown-menu abajo" aria-labelledby="navbarDropdown" >
                <center><a href="proveedores" class="dropdown-nav-item reservacion abajo"><img src="flaticons/proveedor.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Proveedores</p></a></center>
                <center><a href="cosas_faltantes" class="dropdown-nav-item reservacion abajo"><img src="flaticons/cosas_faltantes.svg" style="width:32px; height:32px;"><p style="color:#3a3a3c; font-size:20px;">Cosas faltantes</p></a></center>
              </div>
            </li>
          </ul>
        </center>
      </div>
    </nav>
  </header>
  <br>
  <br>
</body>
</html>
