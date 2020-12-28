

<!DOCTYPE html>
<html>

<head> 
    <title> This is Title </title>
</head>
<body>
<iframe src="http://www.atovait.com/"></iframe>

<form action="welcome.php" method="post">
    Name : <input require type = "text" name = "username"/><br/><br/>
    Email : <input require type = "email" name = "email"/><br/><br/>
    
    Dristic: 
    <select name="dristic" require>
        <option value = "">Select Dristic</option>
        <option value = "jamalpur">Jamalpur</option>
        <option value = "dhaka">Dhaka</option>
        <option value = "rongpur">Rongpur</option>
        <option value = "tangail">Tangail</option>
    </select>
    <br><br>
   

    Gender:
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br/><br/>

    
    <input type = "submit" value = "Submit">


</form>


</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dristic = $_POST['dristic'];
    echo "User name : $name <br> Email :  $email <br>";
    echo "Dristic : $dristic <br>";
    echo "Gender is : $gender";
    echo "<br>";
}
require 'timeDate.php';
include('timeDate.php');

//session......
 echo "<br>";
 session_start();
// echo $_SESSION['var'] ;

if (isset($_SESSION['login']))
{
    echo "<h1>Login Seccess full<h1>";
}else{
    echo "<h1>Plz login<h1>";
}

?>