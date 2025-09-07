<?php
  $str1 = "Hello";
  $str2 = "hello";
  $res = strcmp($str1, $str2);
  echo "res: " . $res . "<br>";
  //
  $str1 = "hello";
  $str2 = "Hello";
  $res = strncmp($str1, $str2, 3);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hello";
  $res = strcasecmp($str1, $str2);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hello";
  $res = strncasecmp($str1, $str2, 3);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hello";
  $res = strnatcmp($str1, $str2);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hello";
  $res = strnatcasecmp($str1, $str2);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hel";
  $res = substr_compare($str1, $str2, 0, 3);
  echo "res: " . $res . "<br>";
  //
  $str1 = "Hello";
  $str2 = "hEllo";
  $res = similar_text($str1, $str2, $percent);
  echo "res: " . $res . "<br>";
  echo "percent: " . $percent . "<br>";
?>