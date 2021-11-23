<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie-edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/principal.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
  <title>Ikura Sushi & Grill - Menú</title>
  <link rel="shortcut icon" href="image/ikura.ico">
</head>
<body class="body">
  <?php
  if(utf8_encode($_SESSION['tipo']) == "Administrador o dueño"){
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
  <center>
    <div class="container">
      <div class="row bg2">
        <div class="col-12 text-center" role="group">
          <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
          <a href="nuevo_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/nueva.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Agregar cosas al menú</p></button></a>
          <a href="tabla_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar menú completo</p></button></a>
          <a href="nueva_categoria"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/nueva.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Agregar categorías</p></button></a>
          <a href="tabla_categoria"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar categorías</p></button></a>
          <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
}
if($_SESSION['tipo'] == "Gerente"|| $_SESSION["tipo"] == "Subgerente"){
  require_once("headergersub.php");
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row bg2">
        <div class="col-12 text-center" role="group">
          <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
          <a href="tabla_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar menú completo</p></button></a>
          <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <?php
}
if($_SESSION['tipo'] == "Mesero(a)"|| $_SESSION["tipo"] == "Cajero(a)"){
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row bg2">
        <div class="col-12 text-center" role="group">
          <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
          <a href="tabla_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar menú completo</p></button></a>
          <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
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
  <br>
  <br>
  <br>
  <br>
  <center>
    <div class="container">
      <div class="row bg2">
        <div class="col-12 text-center" role="group">
          <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
          <a href="tabla_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar menú completo</p></button></a>
          <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
<?php
}
if($_SESSION['tipo'] == "Cocinero(a)" || $_SESSION["tipo"] == "Cajero(a)" || $_SESSION['tipo'] == "Auxiliar de cocina" || $_SESSION['tipo'] == "Auxiliar de sushero" || $_SESSION['tipo'] == "Sushero(a)"){
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
  <div class="container">
    <div class="row bg2">
      <div class="col-12 text-center" role="group">
        <a href="principal"><button type="submit" class="btn btn-outline-primary"><img src="image/ikura.png" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Inicio</p></button></a>
        <a href="tabla_menu"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/mostrar.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Mostrar menú completo</p></button></a>
        <a href="cerrar"><button type="submit" class="btn btn-outline-secondary"><img src="flaticons/close.svg" style="width:50; height:50;" class="d-inline-block align-top"><p style="color:#3a3a3c; font-size:20px;"> Cerrar sesión</p></button></a>
      </div>
    </div>
  </div>
</center>
<br>
<br>
<?php
}
require_once("footer.php");
?>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
