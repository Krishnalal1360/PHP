<?php
    $arr = [
        ["Peter", 21, "Delhi"],
        ["Michael", 22, "Goa"],
        ["John", 23, "Mumbai"],
    ];
    //
    echo count($arr) . "<br>";
    //
    echo sizeof($arr) . "<br>";
    //
    $arr = [
        "Alex" => [
            "age" => 21,
            "city" => "Delhi"
        ],
        "Michael" => [
            "age" => 22,
            "city" => "Goa"
        ],
        "John" => [
            "age" => 23,
            "city" => "Mumbai"
        ]
    ];   
    //
    echo count($arr) . "<br>";
    //
    echo sizeof($arr) . "<br>";
    //
    echo sizeof($arr, 1) . "<br>";
    //
    $arr = [
        ["Peter", 21, "Delhi"],
        ["Michael", 22, "Goa"],
        ["John", 23, "Mumbai"],
    ];
    print_r(array_count_values($arr[0]));
    //
    $arr = [
        "Alex" => [
            "age" => 21,
            "city" => "Delhi"
        ],
        "Michael" => [
            "age" => 22,
            "city" => "Goa"
        ],
        "John" => [
            "age" => 23,
            "city" => "Mumbai"
        ]
    ];   
    echo "<br>";
    print_r(array_count_values($arr["Alex"]));
    //
    echo "<br>";
    echo sizeof($arr, 1) . "<br>";
?>