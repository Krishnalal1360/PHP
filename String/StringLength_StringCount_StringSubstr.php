<?php
  $str = "This is php!";
  echo $str . "<br>";
  //
  $len = strlen($str);
  echo $len . "<br>";
  //
  $count = str_word_count($str);
  echo $count . "<br>";
  //
  $ar1 = str_word_count($str, 1);
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  $ar1 = str_word_count($str, 2);
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  echo "<br>";
  //
  $str = "This is PHP. PHP is a server-side programming language!";
  echo $str . "<br>";
  //
  $sbstr_count = substr_count($str, "PHP");
  echo $sbstr_count . "<br>";
  //
  $sbstr_count = substr_count($str, "PHP", 1, 12);
  echo $sbstr_count . "<br>";
?>