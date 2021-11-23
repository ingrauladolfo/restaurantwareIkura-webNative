<?php session_start();
require_once("pooh.php");
if(isset($_POST['save_colaborador'])){
  $nombre = $_POST['nombres'];
  $first = $_POST['primer_apellido'];
  $second = $_POST['segundo_apellido'];
  $direccion = $_POST['direccion'];
  $edad = $_POST['edad'];
  $tel = $_POST['tel'];
  $puesto = $_POST['tipo'];
  $grado = $_POST['grado'];
  $estudia = $_POST['estudia'];
  $sucursales = $_POST['sucursales'];
  $experiencia = $_POST['experiencia'];
  $ese="INSERT INTO colaboradores(nombres, primer_apellido, segundo_apellido, direccion, edad, telefono, puesto, grado_escolar, estudia, Id_sucursales, experiencia) VALUES('$nombre','$first','$second','$direccion', '$edad', '$tel', '$puesto', '$grado', '$estudia', '$sucursales', '$experiencia')";
  $ejecut=mysqli_query($mimir,$ese);
  if($ejecut==TRUE){
    echo '<script type="text/javascript">alert("Guardado","Colaborador agregad@ satisfactoriamente","success")</script>';
    echo("<script>window.location = 'colaboradores.php';</script>");
  }
  $mimir->close();
}
 ?>
