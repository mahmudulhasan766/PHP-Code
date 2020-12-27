<?php
 
 $a = "hello world";
 echo $a." :";
 echo strlen($a);
 echo "<br>". $a." :";
 echo str_word_count($a);

 
 echo "<br>". $a." :";
 echo strrev($a);
 
 $b = "hello world";
 echo "<br>". $b." :";
 echo str_replace("hello","boss",$b);
 
 echo "<br>". $a." :";
 echo strpos($a,"world");


 ///constant
 define ('nam','Atova',true);
 
 echo "<br>",nam;
 echo "<br>",NAM;
?>