<?php
  $dt = date("d/m/Y h:i:s A");
  $dp = date_parse($dt);
  echo "<pre>";
    print_r($dp);
  echo "</pre>";
  //
  $dpff = date_parse_from_format("d.m.y", "31.1.2020");
  echo "<pre>";
    print_r($dpff);
  echo "</pre>";
?>