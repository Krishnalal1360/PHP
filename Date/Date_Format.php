<?php
  $d = "d";
  $m = "m";
  $y = "Y";
  $df = date("$d/$m/$y");
  echo $df . "<br>";
  //
  $d = "d";
  $ord = "S";
  $m = "F";
  $y = "y";
  $df = date("$d$ord-$m-$y");
  echo $df . "<br>";
  //
  $d = "l";
  $m = "F";
  $y = "y";
  $df = date("$d-$m-$y");
  echo $df . "<br>";
?>