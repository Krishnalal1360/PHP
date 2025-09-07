<?php
  $str = "This is php!";
  //
  echo $str . "<br>";
  //
  $res = strtolower($str);
  echo $res . "<br>";
  //
  $res = strtoupper($str);
  echo $res . "<br>";
  //
  $res = ucwords($str);
  echo $res . "<br>";
  //
  $str = "this is php!";
  $res = ucfirst($str);
  echo $res . "<br>";
  //
  $str = "This is php!";
  $res = lcfirst($str);
  echo $res . "<br>";
?>