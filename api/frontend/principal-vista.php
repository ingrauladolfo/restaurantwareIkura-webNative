<html lang="es">
<head>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../principal.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>Ikura Sushi & Grill - Página principal</title>
  <link rel="shortcut icon" href="image/ikura.ico">
</head>
<body class="body">
  <?php
  if(utf8_encode($_SESSION['tipo']) == "Administrador o dueño"){
    require_once("headeradmin.php");
    ?>
    <div class="container justify-content-center">
      <div class="row abajo">
        <div class="col abajo">
          <nav class="navbar navbar-expand-lg navbar-light body mx-a">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <center>
              <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
                <center>
                  <a class="navbar-brand" href="#">
                    <center><h1 style="color:#0000ff;"><p class="text-center" style="color:#001aff;"> Bienvenid@ <?php echo(utf8_encode($_SESSION['usuarios']));?> a <img src="image/ikura.png" style="width:60px; height:60px;"></h1></center>
                  </a>
                  <div class="btn">
                    <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
                    <a href="clientes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/clientes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comenzales</p></button></a>
                    <a href="colaboradores"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/colaborador.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Colaboradores</p></button></a>
                    <a href="inventarios"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/inventarios.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inventarios</p></button></a>
                    <a href="proveedores"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/proveedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Proveedores</p></button></a>
                    <a href="sucursales"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/sucursales.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Sucursales</p></button></a>
                    <a href="cosas_faltantes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cosas_faltantes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver cosas faltantes</p></button></a>
                    <a href="comedor_cajas"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cajas.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cajas</p></button></a>
                    <a href="pase_lista"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/pase_lista.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Pase de lista</p></button></a>
                    <a href="facturar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/facturar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Facturar</p></button></a>
                    <a href="admon_facturas"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/admon_factura.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Administra tus facturas</p></button></a>
                    <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"> <p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
                  </div>
                </center>
              </div>
            </center>
          </nav>
        </div>
      </div>
    </div>
  <br>
  <br>
  <?php
  }
  if($_SESSION['tipo'] == "Gerente" || $_SESSION["tipo"] == "Subgerente"){
    require_once("headergersub.php");
  ?>
  <center>
    <div class="container">
      <div class="row abajo">
        <div class="col abajo">
          <nav class="navbar navbar-expand-lg navbar-light body mx-a">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <center>
              <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
                <center>
                  <a class="navbar-brand" href="#">
                    <center><h1 style="color:#0000ff;"><p class="text-center" style="color:#001aff;"> Bienvenid@ <?php echo(utf8_encode($_SESSION['usuarios']));?> a <img src="image/ikura.png" style="width:60px; height:60px;"></h1></center>
                  </a>
                  <div class="btn">
                    <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
                    <a href="clientes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/clientes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comenzales</p></button></a>
                    <a href="cajas"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cajas.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cajas</p></button></a>
                    <a href="comedor"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/comedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comedor</p></button></a>
                    <a href="facturar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/facturar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Facturar</p></button></a>
                    <a href="sucursales"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/sucursales.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver sucursales</p></button></a>
                    <a href="menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/menu.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver menú</p></button></a>
                    <a href="pase_lista"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/pase_lista.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Pase de lista</p></button></a>
                    <a href="proveedores"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/proveedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver proveedores</p></button></a>
                    <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
                  </div>
                </center>
              </div>
            </center>
          </nav>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
  }
  if($_SESSION['tipo'] == "Mesero(a)"|| $_SESSION["tipo"] == "Cajero(a)"){
  require_once("headermescaj.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row abajo">
        <div class="col abajo">
          <nav class="navbar navbar-expand-lg navbar-light body mx-a">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <center>
              <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
                <center>
                  <a class="navbar-brand" href="#">
                    <center><h1 style="color:#0000ff;"><p class="text-center" style="color:#001aff;"> Bienvenid@ <?php echo(utf8_encode($_SESSION['usuarios']));?> a <img src="image/ikura.png" style="width:60px; height:60px;"></h1></center>
                  </a>
                  <div class="btn">
                    <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
                    <a href="clientes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/clientes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comenzales</p></button></a>
                    <a href="cajas"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cajas.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cajas</p></button></a>
                    <a href="comedor"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/comedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comedor</p></button></a>
                    <a href="facturar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/facturar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Facturar</p></button></a>
                    <a href="sucursal"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/sucursales.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver sucursales</p></button></a>
                    <a href="menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/menu.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver menú</p></button></a>
                    <a href="proveedores"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/proveedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver proveedores</p></button></a>
                    <a href="pase_lista"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/pase_lista.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Pase de lista</p></button></a>
                    <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
                  </div>
                </center>
              </div>
            </center>
          </nav>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
  }
  if($_SESSION['tipo'] == "Repartidor"){
  require_once("headerrepart.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row abajo">
        <div class="col abajo">
          <nav class="navbar navbar-expand-lg navbar-light body mx-a">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <center>
              <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
                <center>
                  <a class="navbar-brand" href="#">
                    <center><h1 style="color:#0000ff;"><p class="text-center" style="color:#001aff;"> Bienvenid@ <?php echo(utf8_encode($_SESSION['usuarios']));?> a <img src="image/ikura.png" style="width:60px; height:60px;"></h1></center>
                  </a>
                  <div class="btn">
                    <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
                    <a href="clientes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/clientes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comenzales</p></button></a>
                    <a href="cajas"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cajas.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cajas</p></button></a>
                    <a href="comedor"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/comedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Comedor</p></button></a>
                    <a href="pase_lista"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/pase_lista.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Pase de lista</p></button></a>
                    <a href="sucursal"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/sucursales.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver sucursales</p></button></a>
                    <a href="menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/menu.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver menú</p></button></a>
                    <a href="proveedores"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/proveedor.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Ver proveedores</p></button></a>
                    <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
                  </div>
                </center>
              </div>
            </center>
          </nav>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
  }
  if($_SESSION['tipo'] =="Cocinero(a)" || $_SESSION['tipo'] =="Auxiliar de cocina" || $_SESSION['tipo'] =="Auxiliar de sushero" || $_SESSION['tipo'] =="Sushero(a)" || $_SESSION['tipo'] =="Lavaloza"){
  require_once("headerotros.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row abajo">
        <div class="col abajo">
          <nav class="navbar navbar-expand-lg navbar-light body mx-a">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <center>
              <div class="collapse navbar-collapse abajo" id="navbarSupportedContent">
                <center>
                  <a class="navbar-brand" href="#">
                    <center><h1 style="color:#0000ff;"><p class="text-center" style="color:#001aff;"> Bienvenid@ <?php echo(utf8_encode($_SESSION['usuarios']));?> a <img src="image/ikura.png" style="width:60px; height:60px;"></h1></center>
                  </a>
                  <div class="btn">
                    <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
                    <a href="pase_lista"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/pase_lista.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Pase de lista</p></button></a>
                    <a href="cosas_faltantes"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/cosas_faltantes.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cosas Faltantes</p></button></a>
                    <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
                  </div>
                </center>
              </div>
            </center>
          </nav>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
  }
  ?>
  <?php
  require_once("footer.php");
  ?>
  <script src="../../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
