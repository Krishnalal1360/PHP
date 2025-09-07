<?php
  $str = "Hello";
  $padstr = str_pad($str, 10, "*", STR_PAD_BOTH);
  echo $str . "<br>";
  echo $padstr . "<br>";
  //
  $str = "Hello";
  $padstr = str_pad($str, 10, "*", STR_PAD_LEFT);
  echo $str . "<br>";
  echo $padstr . "<br>";
  //
  $str = "Hello";
  $padstr = str_pad($str, 10, "*", STR_PAD_RIGHT);
  echo $str . "<br>";
  echo $padstr . "<br>";
  //
  $str = "Hello";
  $repstr = str_repeat($str, 10);
  echo $str . "<br>";
  echo $repstr . "<br>";
?>