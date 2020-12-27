<!DOCTYPE html>
<html>
<head> 
    <title> This is Title </title>
</head>
<body>

<form action="welcome.php" method="post">
    Name : <input require type = "text" name = "username"/><br/><br/>
    Email : <input require type = "email" name = "email"/><br/><br/>
    
    Gender: 
    <select name="gender" require>
        <option value = "">Select Gender</option>
        <option value = "male">Male</option>
        <option value = "female">Female</option>
    </select>
    <br><br>
    <input type = "submit" value = "Submit">
</form>


</body>
</html>