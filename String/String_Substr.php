<?php
  $str = "This is php!";
  echo $str . "<br>";
  //
  $sbstr = substr($str, 0, 4);
  echo $sbstr . "<br>";
  echo strlen($sbstr) . "<br>";
  //
  $sbstr = substr($str, -4, 4);
  echo $sbstr . "<br>";
  echo strlen($sbstr) . "<br>";
?>