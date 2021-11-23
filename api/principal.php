<?php
session_start();

    if(isset($_SESSION['usuarios'])){
        require_once(__DIR__.'frontend/principal-vista.php');
    }else{
        header ('location: login.php');
        exit();
    }

?>
