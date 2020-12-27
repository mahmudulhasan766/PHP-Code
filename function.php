<!DOCTYPE html>
<html>
<body>
<h1> My First PHP Code</h1>
<?php
   
   function myfunc(){
    $text = 'hello';
       echo $text." Bangladesh ".$text."<br>";
   }
   myfunc();

   //parameter........
   function myfuncpara($num1,$num2){
      $sum = $num1+$num2;
      echo "<br>Sum = ".$sum;
   }
   myfuncpara(23,45);

   function addNumbers($a,$b) {
      echo "<br>";
      echo $a + $b."<br>";
    }
    addNumbers(5, 6);


    function setHeight(int $minheight = 50) {
      echo "The height is : $minheight <br>";
    }
    
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    //return function.......
    function sum(int $x, int $y) {
      $z = $x + $y;
      return $z;
    }
    
    echo "5 + 10 = " . sum(5,10) . "<br>";
    echo "7 + 13 = " . sum(7,13) . "<br>";
    echo "2 + 4 = " . sum(2,4);
   
    //float type......
    
    

?>

</body>
</html>