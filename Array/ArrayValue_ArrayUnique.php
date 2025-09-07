<?php
    $ar1 = ["10", "20", "30", "40", "50"];
    //
    $ar2 = array_values($ar1);
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "a" => "10", 
        "b" => "20", 
        "c" => "30", 
        "d" => "40", 
        "e" => "50"
    ];
    //
    $ar2 = array_values($ar1);
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = ["10", "20", "30", "40", "50", "10", "20", "30", "40", "50"];
    //
    $ar2 = array_unique($ar1);
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "a" => "10", 
        "b" => "20", 
        "c" => "30", 
        "d" => "40", 
        "e" => "50",
        "a" => "10", 
        "b" => "20", 
        "c" => "30", 
        "d" => "40", 
        "e" => "50",
        "f" => "10", 
        "g" => "20", 
        "h" => "30", 
        "i" => "40", 
        "j" => "50",
        "a" => "60", 
        "b" => "70", 
        "c" => "80", 
        "d" => "90", 
        "e" => "100",
    ];
    //
    $ar2 = array_unique($ar1);
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
?>