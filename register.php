<?php session_start();
if(isset($_SESSION['usuarios'])) {
    header('location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $usuarios = utf8_encode($_POST['usuarios']);
  $clave = $_POST['clave'];
  $clave2 = $_POST['clave2'];
  $sucursal = $_POST['sucursales'];
  $tipo = $_POST['tipo'];
  $error = '';
  $error = '';
  if (empty($usuarios) or empty($clave) or empty($clave2) or empty($sucursal) or empty($tipo)){
    $error .= 'Favor de rellenar todos los campos';
  }else{
      try{
          $conexion = new PDO('mysql:host=localhost;dbname=ikura', 'root', '');
      }catch(PDOException $prueba_error){
          echo "Error: " . $prueba_error->getMessage();
      }
      $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuarios = :usuarios LIMIT 1');
      $statement->execute(array(':usuarios' => $usuarios));
      $resultado = $statement->fetch();
      if ($resultado != false){
        $error .= '<i style="color: black; ">El usuario que usted está tratando de registrar ya está en uso</i>';
      }
      if ($clave != $clave2){
        $error .= '<i style="color: black;"> Las contraseñas no coinciden</i>';
      }

  }

  if ($error == ''){
    $statement = $conexion->prepare('INSERT INTO usuarios(usuarios, claves, Id_sucursales, tipo) VALUES (:usuarios, :claves, :Id_sucursales, :tipo)');
    $statement->execute(array(':usuarios'=>$usuarios, ':claves'=>$clave,':Id_sucursales'=>$sucursal,':tipo'=>$tipo));
    $error .= '<i style="color: black; ">Usuario registrado exitosamente</i>';
  }
}
require_once('frontend/register-vista.php');
?>
