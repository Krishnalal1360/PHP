<?php
    $ar1 = [10, 20, 30, 40, 50];
    //
    array_splice($ar1, 0, 3);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [10, 20, 30, 40, 50];
    //
    array_splice($ar1, -2, 2);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [10, 20, 30, 40, 50];
    //
    array_splice($ar1, -2, 2);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [10, 20, 30, 40, 50];
    $ar2 = [60, 70];
    //
    array_splice($ar1, -2, 2, $ar2);
    print_r($ar1);
    echo "<br>";
?>