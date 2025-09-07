<?php
  $str = "<b>Bold</b>, <i>Italic</i>, <u>Underline</u>";
  $ststr = strip_tags($str);
  echo $str . "<br>";
  echo $ststr . "<br>";
  //
  $str = "<b>Bold</b>, <i>Italic</i>, <u>Underline</u>";
  $ststr = strip_tags($str, "<b><i>");
  echo $str . "<br>";
  echo $ststr . "<br>";
  //
  $str = "Hello I am Jarvis 2.0! Welcome to the world of AI!";
  $wwstr = wordwrap($str, 4, "<br>", TRUE);
  echo $str . "<br>";
  echo $wwstr . "<br>";
?>