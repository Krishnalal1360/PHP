<?php
  /*$ar1 = [10, 20, 30, 40, 50];
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  function f1($val, $init){
      $val = $val + $init;
      return $val;
  }
  $value = array_reduce($ar1, "f1", 0);
  echo $value;
  echo "<br>";*/
  //
  $ar1 = [
    "a" => 10, 
    "b" => 20, 
    "c" => 30, 
    "d" => 40, 
    "e" => 50
  ];
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  function f1($val, $init){
      $val = $val + $init;
      return $val;
  }
  $value = array_reduce($ar1, "f1", 0);
  echo $value;
  echo "<br>";
?>
