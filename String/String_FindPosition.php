<?php
  $str = "This is PHP! PHP is a server-side programming language!";
  echo $str . "<br>";
  //
  $res = strpos($str, "PHP");
  echo $res . "<br>";
  //
  $res = strrpos($str, "PHP");
  echo $res . "<br>";
  //
  $str = "This is php! PHP is a server-side programming language!";
  $res = stripos($str, "PHP");
  echo $res . "<br>";
  //
  $res = strripos($str, "PHP");
  echo $res . "<br>";
?>