<html lang="es">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie-edge">
   <link rel="stylesheet" href="../../css/bootstrap.min.css">
   <link rel="stylesheet" href="../../principal.css">
   <link href="https://fonts.googleapis.com/css?family=Lilita+One" rel="stylesheet">
   <title>Ikura Sushi & Grill - Colaboradores</title>
   <link rel="shortcut icon" href=../../"image/ikura.ico">
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
  <?php
    require_once("tablecolaborador.php");
  ?>
  <br>
 <?php
}
if($_SESSION['tipo'] == "Gerente" || $_SESSION['tipo'] == "Subgerente"){
  require_once("headergersub.php")
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
<?php
  require_once("tablecolaborador.php");
?>
<br>
<?php
}
if($_SESSION['tipo'] == "Mesero(a)" || $_SESSION['tipo'] == "Cajero(a)"){
  require_once("headermescaj.php");
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
<?php
  require_once("tablecolaborador.php");
?>
<br>
<br>
<?php
}
require_once("footer.php");
?>
<script src="../../js/jquery-3.3.1.slim.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
 </body>
 </html>
