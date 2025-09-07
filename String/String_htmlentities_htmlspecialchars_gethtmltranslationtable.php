<?php
  $str = "<a href='https://www.google.com'>Google@Com</a>";
  echo $str . "<br>";
  $he = htmlentities($str);
  echo $he . "<br>";
  /*
  //
  $str = "<a href='https://www.google.com'>Google@Com</a>";
  echo $str . "<br>";
  $he = htmlentities($str, ENT_COMPAT);
  echo $he . "<br>";
  //
  $str = "<a href='https://www.google.com'>Google@Com</a>";
  echo $str . "<br>";
  $he = htmlentities($str, ENT_QUOTES);
  echo $he . "<br>";
  //
  $str = "<a href='https://www.google.com'>Google@Com</a>";
  echo $str . "<br>";
  $he = htmlentities($str, ENT_NOQUOTES);
  echo $he . "<br>";
  //
  */
  //
  $d_he = html_entity_decode($he);
  echo $d_he . "<br>";
  //
  $str = "<a href='https://www.google.com'>Google@Com</a>";
  echo $str . "<br>";
  $hsc = htmlspecialchars($str);
  echo $he . "<br>";
  $d_hsc = htmlspecialchars_decode($hsc);
  echo $d_hsc . "<br>";
  //
  $ghtt = get_html_translation_table(HTML_ENTITIES);
  print_r($ghtt);
  echo "<br>";
  print_r(count($ghtt));
  echo "<br>";
  echo "<br>";
  $ghtt = get_html_translation_table(HTML_SPECIALCHARS);
  print_r($ghtt);
  echo "<br>";
  print_r(count($ghtt));
  echo "<br>";
?>