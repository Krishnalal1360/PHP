<?php
  /*$str = "This is php.";
  //
  $ar1 = explode(" ", $str);
  //
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  $ar1 = explode(" ", $str, 2);
  //
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";*/
  //
  $ar1 = ["This", "is", "php."];
  //
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  $str = implode(" ", $ar1);
  echo "str = " . $str;
?>