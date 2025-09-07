<?php
    function f1(&$str){
        $str = $str . " World";
        echo "Inside Function: " . $str . "<br>";
    }
    $str = "Hello";
    echo "Before Calling: " . $str . "<br>";
    f1($str);
    echo "After Calling: " . $str . "<br>";     
?>