<?php
  /*$ar1 = [10, 20, 30, 40, 50];
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  print_r(current($ar1));
  echo "<br>";
  //
  print_r(next($ar1));
  echo "<br>";
  //
  print_r(prev($ar1));
  echo "<br>";
  //
  print_r(end($ar1));
  echo "<br>";
  //
  print_r(reset($ar1));
  echo "<br>";
  //
  print_r(pos($ar1));
  echo "<br>";
  //
  */
  $ar1 = [
        "a" => 10,
        "b" => 20,
        "c" => 30,
        "d" => 40,
        "e" => 50
  ];
  //
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  print_r(key($ar1));
  echo "<br>";
  //print_r(current($ar1));
  //
  next($ar1);
  print_r(key($ar1));
  echo "<br>";
  //
  prev($ar1);
  print_r(key($ar1));
  echo "<br>";
  //
  end($ar1);
  print_r(key($ar1));
  echo "<br>";
  //
  reset($ar1);
  print_r(key($ar1));
  echo "<br>";
?>