<?php
    $str = "This is PHP! PHP is a server-side programming language.";
    echo $str . "<br>";
    //
    $new_str = str_replace("PHP", "NodeJS", $str);
    echo $new_str . "<br>";
    //
    $str = "This is php! PHP is a server-side programming language.";
    echo $str . "<br>";
    //
    $new_str = str_ireplace("PHP", "NodeJS", $str);
    echo $new_str . "<br>";
    //
    $str = "This is PHP! PHP is a server-side programming language.";
    echo $str . "<br>";
    //
    $new_str = substr_replace($str, "NodeJS", 8);
    echo $new_str . "<br>";
    //
    $str = "This is PHP! PHP is a server-side programming language.";
    echo $str . "<br>";
    //
    $new_str = strstr($str, "PH", "HP");
    echo $new_str . "<br>";
?>