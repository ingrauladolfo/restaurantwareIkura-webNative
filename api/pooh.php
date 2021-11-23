<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ikura';
//Create connection and select DB
$mimir =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if ($mimir->connect_error) {
    die("Unable to connect database: " . $mimir->connect_error);
}
mysqli_set_charset($mimir, "utf8");
?>
