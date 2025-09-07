<?php
  $dt = date_create("2025-01-20");
  $ndt = date_add($dt, date_interval_create_from_date_string("20 days"));
  $df = date_format($dt, "d/m/Y");
  echo $df . "<br>";
  //
  $dt = date_create("2025-01-20");
  $ndt = date_sub($dt, date_interval_create_from_date_string("20 days"));
  $df = date_format($dt, "d/m/Y");
  echo $df . "<br>";
  //
  $dt = date_create("2025-01-20");
  $ndt = date_modify($dt, "20 days");
  $df = date_format($dt, "d/m/Y");
  echo $df . "<br>";
  //
  $dt = date_create("2025-01-20");
  $ndt = date_modify($dt, "-20 days");
  $df = date_format($dt, "d/m/Y");
  echo $df . "<br>";
?>