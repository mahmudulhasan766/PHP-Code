<!DOCTYPE html>
<html>
<body>
<h1> Loops Code :</h1>
<?php

    // while ............
    $x = 0;
    while($x <= 10) {
      echo "While  : $x <br>";
      $x++;
    }
    // do .... while .......
    $y = 11;
    do {
        echo "do.While: $y <br>";
        $y++;
    } while ($y <= 20);

    //for loop ............
    for ($x = 21; $x <= 30; $x+=1) 
    {
        echo "for..loop: $x <br>";
    }
    //Foreach loop.........
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }

    //Break........
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          break;
        }
        echo "The break: $x <br>";
    }
    $x = 0;

    while($x < 10) {
       if ($x == 4) {
         break;
    }
    echo "while break : $x <br>";
  $x++;
}
    //Continue......
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue;
        }
        echo "The continue: $x <br>";
    }
    $x = 0;

    while($x < 10) {
       if ($x == 4){
          $x++;
          continue;
       }
       echo "The number is: $x <br>";
       $x++;
    }

?>
</body>
</html>