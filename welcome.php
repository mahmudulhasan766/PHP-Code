<?php

function input ($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = input($_POST['username']);
$email = input($_POST['email']);
$gender =input( $_POST['gender']);
$dristic =input( $_POST['dristic']);

    echo "User name : $name <br> Email :  $email <br>";
    echo "Dristic : $dristic <br>";
    echo "Gender is : $gender";
    echo "<br>";

    //session.....
    echo "<br>";
    session_start();
    echo $_SESSION['var'] ;
?>