<?php
  $gd = getdate();
  echo "<pre>";
    print_r($gd);
  echo "</pre>";
  //
  $mt = mktime(23, 30, 50, 12, 31, 2024);
  $gd = getdate($mt);
  echo "<pre>";
    print_r($gd);
  echo "</pre>";
  //
  $gtod = gettimeofday(FALSE);
  echo "<pre>";
    print_r($gtod);
  echo "</pre>";
  //
  $gtod = gettimeofday(TRUE);
  echo "<pre>";
    print_r($gtod);
  echo "</pre>";
  //
  $lt = localtime(time(), TRUE);
  echo "<pre>";
    print_r($lt);
  echo "</pre>";
  //
  $gd = getdate();
  $lt = localtime($gd[0], TRUE);
  echo "<pre>";
    print_r($lt);
  echo "</pre>";
  //
  $gd = getdate();
  $lt = localtime($gd[0], FALSE);
  echo "<pre>";
    print_r($lt);
  echo "</pre>";
?>