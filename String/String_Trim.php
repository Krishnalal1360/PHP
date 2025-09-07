<?php
    $str = "   Hello   ";
    $trmstr = trim($str, " ");
    echo $str . "<br>";
    echo $trmstr . "<br>";
    //
    $str = "###Hello###";
    $trmstr = trim($str, "#");
    echo $str . "<br>";
    echo $trmstr . "<br>";
    //
    $str = "###Hello###";
    $trmstr = ltrim($str, "#");
    echo $str . "<br>";
    echo $trmstr . "<br>";
    //
    $str = "###Hello###";
    $trmstr = rtrim($str, "#");
    echo $str . "<br>";
    echo $trmstr . "<br>";
    //
    $str = "###Hello###";
    $trmstr = chop($str, "#");
    echo $str . "<br>";
    echo $trmstr . "<br>";
?>