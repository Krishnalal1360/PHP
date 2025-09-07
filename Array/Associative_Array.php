<?php
    $arr = array(
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    );
    //
    echo "Iterating associative array: " . "<br>";
    foreach($arr as $key => $value){
        echo  $key . " => " . $value . "<br>";
    }
    //
    $arr = [
        "Peter" => [
            "age" => 35,
            "city" => "New York"
        ],
        "Ben" => [
            "age" => 37,
            "city" => "London"
        ],
        "Joe" => [
            "age" => 43,
            "city" => "Paris"
        ]
    ];
    //
    echo "Iterating nested associative array: " . "<br>" . "<br>";
    foreach($arr as $key => $value){
        echo $key . "=>" . "<br>";
        foreach($value as $key2 => $value2){
            echo $key2 . " => " . $value2 . "<br>";
        }
        echo "<br>";
    }
    //
    echo "<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>