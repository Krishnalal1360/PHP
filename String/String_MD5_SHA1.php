<?php
  $str = "Hello";
  $mdstr = md5($str);
  echo $str . "<br>";
  echo $mdstr . "<br>";
  echo strlen($mdstr) . "<br>";
  //
  $str = "Hello";
  $mdstr = md5($str, true);
  echo $str . "<br>";
  echo $mdstr . "<br>";
  echo strlen($mdstr) . "<br>";
  //
  $str = "Hello";
  $shastr = sha1($str);
  echo $str . "<br>";
  echo $shastr . "<br>";
  echo strlen($shastr) . "<br>";
  //
  $str = "Hello";
  $shastr = sha1($str, true);
  echo $str . "<br>";
  echo $shastr . "<br>";
  echo strlen($shastr) . "<br>";
?>