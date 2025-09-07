<?php
  $str = "Hello World!";
  $hstr = bin2hex($str);
  echo $str . "<br>";
  echo strlen($str) . "<br>";
  echo $hstr . "<br>";
  echo strlen($hstr) . "<br>";
  //
  $bstr = hex2bin($hstr);
  echo $bstr . "<br>";
  echo strlen($bstr) . "<br>";
?>