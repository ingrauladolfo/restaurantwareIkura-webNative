 <?php
session_start();
require_once("pooh.php");
 if(isset($_POST['update_colaborador'])){
   $id=$_REQUEST['editar'];
   $nombres = $_POST['nombres'];
   $first = $_POST['primer_apellido'];
   $second = $_POST['segundo_apellido'];
   $direccion = $_POST['direccion'];
   $edad = $_POST['edad'];
   $tel = $_POST['tel'];
   $puesto = $_POST['puesto'];
   $grado = $_POST['grado'];
   $estudia = $_POST['estudia'];
   $sucursales = $_POST['sucursales'];
   $experiencia = $_POST['experiencia'];
   $base = "UPDATE colaboradores SET nombres='$nombres', primer_apellido='$first', segundo_apellido='$second', direccion='$direccion',  edad='$edad', telefono='$tel', puesto='$puesto', grado_escolar='$grado', estudia='$estudia', Id_sucursales='$sucursales', experiencia='$experiencia' WHERE id='$id'";
   $ejecutar=mysqli_query($mimir, $base);
   $fila = mysqli_fetch_assoc($ejecutar);
   while($fila == TRUE){
     echo("<script>window.location = 'colaboradores.php';</script>");
     echo '<script type="text/javascript"> alert("Modificación exitosa"); </script>';
  }
 }
?>
