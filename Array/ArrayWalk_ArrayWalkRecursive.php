<?php
    $ar1 = [
        "a" => 10,
        "b" => 20,
        "c" => 30,
    ];
    //
    function f1($value, $key, $param){
        echo $key . " " . $param . " " . $value . "<br>";
    }
    array_walk($ar1, "f1", "is key of");
    //
    $ar1 = [
        "a" => [
            "name" => "John",
            "age" => 25,
            "salary" => 5000
        ],
        "b" => [
            "name" => "Michael",
            "age" => 25,
            "salary" => 6000
        ],
        "c" => [
            "name" => "Alex",
            "age" => 25,
            "salary" => 7000
        ]
    ];
    //
    function f2($value, $key, $param){
        echo $key . " " . $param . " " . $value . "<br>";
    }
    array_walk_recursive($ar1, "f2", "is key of");
?>