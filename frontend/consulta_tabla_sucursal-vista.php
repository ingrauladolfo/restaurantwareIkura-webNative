<?php
require_once("pooh.php");
if(isset($_POST['consultarsucursal'])){
  $sucursal=$_POST['sucursal'];
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
 <?php
 require_once("tablesucursales.php");
 ?>
<br>
 <center><a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;"> Regresar</button></a></center>
 <br>
<?php
}
if($_SESSION['tipo'] == "Gerente" || $_SESSION['tipo'] == "Subgerente"){
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
<br>
<?php
require_once("tablesucursales.php");
?>
<br>
<center>
  <a href="sucursales"><button type="submit" class="button"> <img src="flaticons/return.svg" style="width:40px; height:40px;">Regresar </button></a>
</center>
<?php
}
  require_once("footer.php");
}
 ?>
 <script src="js/jquery-3.3.1.slim.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </body>
 </html>
