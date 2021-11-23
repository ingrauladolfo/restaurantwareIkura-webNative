<?php
session_start();
require_once("pooh.php");
$id= $_REQUEST['id'];
$ese = "DELETE FROM colaboradores WHERE Id_colaboradores = '$id'";
$ejecut = mysqli_query($mimir, $ese);
if($ejecut == TRUE){
  echo "<script>alert('Eliminado satisfactoriamente')</script>";
  echo("<script>window.location = 'tabla_colaborador.php';</script>");
}
$mimir->close();
 ?>
