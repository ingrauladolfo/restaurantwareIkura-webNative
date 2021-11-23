<?php 
require_once(__DIR__.'frontend/login-vista.php');
session_start();
    if(isset($_SESSION['usuarios'])) {
        header('location: principal.php');
        exit();
    }
    $error = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuarios = utf8_decode($_POST['usuarios']);
        echo(utf8_decode($usuarios));
        $clave = $_POST['clave'];
        echo("<br> la clave es: ".$clave);
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=ikura', 'root', '');

          }catch(PDOException $prueba_error){
            echo "Error: " . $prueba_error->getMessage();
          }

          $statement = $conexion->prepare('
          SELECT usuarios, claves, tipo FROM usuarios WHERE usuarios = :usuarios AND claves = :claves'
          );
          $statement->execute(array(
              ':usuarios' => $usuarios,
              ':claves' => $clave,
          ));
        $resultado = $statement->fetch();
        if ($resultado == TRUE){
            $_SESSION['usuarios'] = $usuarios;
            $_SESSION['tipo'] = $resultado['tipo'];
            header('location: principal.php');
            exit();
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
?>
