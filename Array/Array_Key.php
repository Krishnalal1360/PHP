<?php
    $ar1 = [10, 20, 30, 40, 50];
    //
    $keys = array_keys($ar1);
    print_r($keys);
    echo "<br>";
    //
    $keys = array_key_first($ar1);
    print_r($keys);
    echo "<br>";
    //
    $keys = array_key_last($ar1);
    print_r($keys);
    echo "<br>";
    //
    $ar1 = [
        "a" => 10, 
        "b" => 20, 
        "c" => 30, 
        "d" => 40,
        "e" => 50
    ];
    //
    $keys = array_keys($ar1);
    print_r($keys);
    echo "<br>";
    //
    $keys = array_key_first($ar1);
    print_r($keys);
    echo "<br>";
    //
    $keys = array_key_last($ar1);
    print_r($keys);
    echo "<br>";
    //
    $keys = array_key_exists("a", $ar1);
    print_r($keys);
    echo "<br>";
?>