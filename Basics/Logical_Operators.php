<?php
  $a = 10;
  $b = 20;

  if($a > $b && $a == $b){
    echo "a is greater than or equal to b";
  }

  if($a > $b || $a == $b){
    echo "a is greater than or equal to b";
  }

  if(!($a > $b)){
    echo "a is less than b!";
  }

?>