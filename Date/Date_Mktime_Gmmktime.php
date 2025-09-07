<?php
  $mt = mktime(12, 30, 0, 1, 1, 2020);
  $f = "l-F-Y h:i:s A";
  $dt = date($f, $mt);
  echo $dt . "<br>";
  //
  $mt = gmmktime(12, 30, 0, 1, 1, 2020);
  $f = "l-F-Y h:i:s A";
  $dt = date($f, $mt);
  echo $dt . "<br>";
?>