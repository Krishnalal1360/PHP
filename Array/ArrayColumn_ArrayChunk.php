<?php
    $ar1 = [
        "Alex" => [
                "age" => 21,
                "city" => "Mumbai"
        ],
        "Peter" => [
                "age" => 22,
                "city" => "Bangalore"
        ],
        "Michael" => [
                "age" => 23,
                "city" => "Goa"
        ]
    ];
    //
    $ar2 = array_column($ar1, "age");
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = array_column($ar1, "city");
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = ["10", "20", "30", "40", "50", "60"];
    //
    $ar2 = array_chunk($ar1, 2);
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
?>