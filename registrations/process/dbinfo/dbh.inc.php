<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "gabogio210";
$dbname = "portfolio";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn) {
      die("Connection Failed: " . mysqli_connect_error()); 
}
?>