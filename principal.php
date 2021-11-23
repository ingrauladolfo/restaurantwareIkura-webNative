<?php
session_start();

    if(isset($_SESSION['usuarios'])){
        require_once('frontend/principal-vista.php');
    }else{
        header ('location: login.php');
        exit();
    }

?>
