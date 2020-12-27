<!DOCTYPE html>
<html>
<body>
<h1> My First PHP Code</h1>
<?php
//indexing array....
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", <br>" . $cars[1] . ", <br>" . $cars[2] . ".";
//Associative array....
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "<br>";
echo "Peter is " . $age['Peter'] . " years old.<br>";
echo "Peter is " . $age['Ben'] . " years old.<br>";
echo "Peter is " . $age['Joe'] . " years old.";
//......
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age2 as $x => $x_value) {
  echo "<br>";
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//multidimensional arrays.....
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  //String array........
   $cars1 = array("Volvo", "BMW", "Toyota");
    sort($cars1);
    echo "assending order :<br>";

    $clength = count($cars1);
    for($x = 0; $x < $clength; $x++) {
    echo $cars1[$x];
    echo "<br>";
    }

    //.........
    $cars2 = array("Volvo", "BMW", "Toyota");
    rsort($cars2);
    echo "desinding order :<br>";
    $clength = count($cars2);
    for($x = 0; $x < $clength; $x++) {
    echo $cars2[$x];
    echo "<br>";
    }
    //..............
    echo "key assandin order order :<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    //.............
    echo "value assandin order order :<br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    //..............
    echo "key and value assandin order order :<br>";
    $age5 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age5);
    
    foreach($age5 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }

?>

</body>
</html>