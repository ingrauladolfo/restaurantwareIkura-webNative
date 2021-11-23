<?php session_start();
    require_once('login.php');
    require_once('principal.php');
    if(isset($_SESSION['usuarios'])) {
        header('location: principal.php');
    }else{
        header('location: login.php');
    }


?>
