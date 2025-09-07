<?php
  $str = "This is PHP! PHP is a server-side programming language.";
  echo $str . "<br>";
  //
  $res = strstr($str, "PHP");
  echo $res . "<br>";
  //
  $str = "This is PHP! php is a server-side programming language.";
  //echo $str . "<br>";
  //
  $res = stristr($str, "php");
  echo $res . "<br>";
  //
  $res = strchr($str, "p");
  echo $res . "<br>";
  //
  $res = strrchr($str, "p");
  echo $res . "<br>";
  //
  $res = strpbrk($str, "pP");
  echo $res . "<br>";
?>