<?php
  $str = "Hello World!";
  $as_str = addslashes($str);
  $ss_str = stripslashes($as_str);
  echo $str . "<br>";
  echo $as_str . "<br>";
  echo $ss_str . "<br>";
  //
  $str = "Hello World!";
  $as_str = addcslashes($str, 'aeiou');
  $ss_str = stripcslashes($as_str);
  echo $str . "<br>";
  echo $as_str . "<br>";
  echo $ss_str . "<br>";
?>