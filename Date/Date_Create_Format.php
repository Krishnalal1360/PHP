<?php
  $dc = date_create("2012-12-12 23:24:35", timezone_open("Asia/Kolkata"));
  $df = date_format($dc, "l-F-Y h:i:s A");
  echo $df . "<br>";
?>