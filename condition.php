<!DOCTYPE html>
<html>
<body>
<h1> Condition : </h1>
<?php
  $t=20;
  if ($t==20){
      echo "my name is condition!<br>";
  }


  $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>

</body>
</html>