<?php 
require_once('login.php');
require_once('principal.php');
session_start();
    
    if(isset($_SESSION['usuarios'])) {
        header('location: principal.php');
    }else{
        header('location: login.php');
    }


?>
