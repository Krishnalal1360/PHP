<?php
  /*$str = "This is php!";
  echo "<pre>";
    print($str);
  echo "</pre>";
  echo "<br>";
  //
  $ar1 = str_split($str);
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";*/
  //
  /*$str = "This is php!";
  echo "<pre>";
    print($str);
  echo "</pre>";
  echo "<br>";
  //
  $ar1 = str_split($str, 2);
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";*/
  //
  $str = "This is php!";
  echo "<pre>";
    print($str);
  echo "</pre>";
  echo "<br>";
  //
  $ar1 = chunk_split($str, 3, "#");
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
?>