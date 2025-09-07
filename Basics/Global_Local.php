<?php
    $a = 10;
    echo "Before Function: " . $a . "<br>";
    function f1(){
        global $a;
        $a = 20;
        echo "Inside Function: " . $a . "<br>";
    }
    f1();
    echo "After Function: " . $a . "<br>";
?>