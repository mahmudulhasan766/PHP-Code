<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location : index.php");
}


date_default_timezone_set("Asia/Dhaka");
echo "<h1> Date and Time </h1>";
echo date("d-M-Y");
echo "<br>";
echo date(" h:i:sa");
?>