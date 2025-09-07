<?php
  $d = 1;
  $m = 1;
  $y = 2025;
  $cd = checkdate($m, $d, $y);
  echo $cd . "<br>";
  //
  $d = 32;
  $m = 1;
  $y = 2025;
  $cd = checkdate($m, $d, $y);
  echo $cd . "<br>";
  //
  $dt1 = date_create("2024-01-01 12:12:12");
  $dt2 = date_create("2025-01-01 23:23:23");
  $df = date_diff($dt1, $dt2, TRUE);
  echo "<pre>" . "<br>";
    print_r($df);
  echo "</pre>" . "<br>";
  echo $df->y . " years, " . $df->m . " months, " . $df->d . " days, " . $df->h . " hours, " . $df->i . " minutes, " . $df->s . " seconds";
?>