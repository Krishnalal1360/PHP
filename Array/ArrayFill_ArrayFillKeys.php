<?php
    $ar1 = [10, 20, 30, 40, 50];
    // 
    $ar1 = array_fill_keys($ar1, 0);
     echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        0 => 10, 
        1 => 20, 
        2 => 30, 
        3 => 40, 
        4 => 50
    ];
    // 
    $ar1 = array_fill(0, 5, 0);
     echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
?>