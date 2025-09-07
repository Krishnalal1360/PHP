<?php
    $ar1 = [
        ["Alex", 21, "Delhi"],
        ["Peter", 22, "Kolkata"],
    ];
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = [
        ["John", 23, "Mumbai"],
        ["Michael", 24, "Bangalore"],
    ];
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_merge($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "user1" => ["Alex", 21, "Delhi"],
        "user2" => ["Peter", 22, "Kolkata"],
    ];
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = [
        "user3" => ["John", 23, "Mumbai"],
        "user4" => ["Michael", 24, "Bangalore"],
    ];
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_merge($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "user1" => [
            "name" => "Alex", 
            "age" => 21, 
            "city" => "Delhi"
        ],
        "user2" => [
            "name" => "Peter", 
            "age" => 22, 
            "city" => "Kolkata"
        ],
    ];
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = [
        "user3" => [
            "name" => "John", 
            "age" => 23, 
            "city" => "Mumbai"
        ],
        "user4" => [
            "name" => "Michael", 
            "age" => 24, 
            "city" => "Chennai"
        ],
    ];
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_merge_recursive($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        ["Alex", 21, "Delhi", "English"],
        ["Peter", 22, "Kolkata", "English"],
    ];
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = [
        ["Alex", 21, "Delhi", "English"],
        ["Peter", 22, "Kolkata", "English"],
        ["John", 23, "Mumbai", "English"],
        ["Michael", 24, "Bangalore", "English"],
    ];
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_merge_recursive($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "user1" => [
            "name" => "Alex", 
            "age" => 21, 
            "city" => "Delhi"
        ],
        "user2" => [
            "name" => "Peter", 
            "age" => 22, 
            "city" => "Kolkata"
        ],
    ];
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    echo "<br>";
    //
    $ar2 = [
        "user1" => [
            "name" => "Alex", 
            "age" => 21, 
            "city" => "Delhi"
        ],
        "user2" => [
            "name" => "Peter", 
            "age" => 22, 
            "city" => "Kolkata"
        ],
        "user3" => [
            "name" => "John", 
            "age" => 23, 
            "city" => "Mumbai"
        ],
        "user4" => [
            "name" => "Michael", 
            "age" => 24, 
            "city" => "Chennai"
        ],
    ];
    echo "<pre>";
        print_r($ar2);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_merge_recursive($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar1 = [
        "Alex", "Michael", "Peter"
    ];
    $ar2 = [
        21, 22, 23
    ];
    //
    $ar3 = array_combine($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
?>