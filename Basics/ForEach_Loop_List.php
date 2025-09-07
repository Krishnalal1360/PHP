<?php
    /*$arr = [
        "Peter" => [
            "age" => 20,
            "city" => "Kolkata"
        ],
        "David" => [
            "age" => 21,
            "city" => "Mumbai"
        ],
        "Michael" => [
            "age" => 22,
            "city" => "Delhi"
        ]
    ];
    //
    foreach($arr as $key => $value){
        echo $key . " => ";
        foreach($value as $key1 => $value1){
            echo $key1 . " => " . $value1 . ", ";
        }
        echo "<br>";
    }*/
    //
    $arr = [
        ["Peter", 20, "Kolkata"],
        ["John", 21, "Mumbai"],
        ["Michael", 22, "Chennai"],
    ];
    //
    foreach($arr as list($name, $age, $city)){
        echo $name . " " . $age . " " . $city . "<br>";
    }
?>