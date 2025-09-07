<?php
    $ar1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    //
    $index = array_rand($ar1);
    echo "<pre>";
        print_r($ar1[$index]);
    echo "</pre>";
    echo "<br>";
    //
    $index_arr = array_rand($ar1, 3);
    echo "<pre>";
        print_r($ar1[$index_arr[0]]);
        echo "<br>";
        print_r($ar1[$index_arr[1]]);
        echo "<br>";
        print_r($ar1[$index_arr[2]]);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    //
    shuffle($ar1);
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
?>