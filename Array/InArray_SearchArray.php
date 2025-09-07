<?php
    $arr = [
        ["Alex", 21, "Kolkata"],
        ["David", 22, "Mumbai"],
        ["Michael", 23, "Delhi"],
    ];
    print_r(in_array("Alex", $arr[0]));
    echo "<br>";
    //
    print_r(in_array("Delhi", $arr[2]));
    //
    if(in_array("Mumbai", $arr[2])){
        echo "<br>" . "Mumbai is present in array 2!";
    }else{
        echo "<br>" . "Mumbai is not present in array 2!";
    }
    //
    if(in_array("23", $arr[2], true)){
        echo "<br>" . "Age 23 as number is present in array 2!";
    }else{
        echo "<br>" . "Age 23 as number is not present in array 2!";
    }
    //
    if(in_array(23, $arr[2], true)){
        echo "<br>" . "Age 23 as number is present in array 2!";
    }else{
        echo "<br>" . "Age 23 as number is not present in array 2!";
    }
    //
    $arr = [
        ["Alex", 21, "Kolkata"],
        ["David", 22, "Mumbai"],
        ["Michael", 23, "Delhi"],
    ];
    echo "<br>";
    print_r(array_search("Alex", $arr[0]));
    //
    echo "<br>";
    print_r(array_search("John", $arr[0]));
    //
    echo "<br>";
    print_r(array_search("Kolkata", $arr[0]));
    //
    if(array_search("Chennai", $arr[2])){
        echo "<br>" . "Chennai is present in array 2!";
    }else{
        echo "<br>" . "Chennai is not present in array 2!";
    }
    //
    $arr = [
        "Alex" => [
                    "age" => 21,
                    "city" => "Kolkata"
                ],
        "Peter" => [
                    "age" => 22,
                    "city" => "Delhi"
                ],
        "Michael" => [
                    "age" => 23,
                    "city" => "Mumbai"
                ],
    ];
    echo "<br>";
    print_r(in_array("Mumbai", $arr["Michael"]));
    //
    echo "<br>";
    print_r(array_search("Mumbai", $arr["Michael"]));
?>