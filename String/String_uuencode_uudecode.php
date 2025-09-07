<?php
  $str = "Hello World";
  $uestr = convert_uuencode($str);
  echo $str . "<br>";
  echo strlen($str)."<br>";
  echo $uestr . "<br>";
  echo strlen($uestr) . "<br>";
  $udstr = convert_uudecode($uestr);
  echo $udstr . "<br>";
  echo strlen($udstr) . "<br>";
?>