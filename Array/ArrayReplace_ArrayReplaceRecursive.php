<?php
    $ar1 = ["HTML", "CSS", "JS"];
    $ar2 = ["PHP", "MySQL", "Laravel"];
    //
    $ar1 = array_replace($ar1, $ar2);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [
        ["10", "20", "30"],
        ["40", "50", "60"],
        ["70", "80", "90"]
    ];
    $ar2 = [
        ["100", "200", "300"],
        ["400", "500", "600"],
        ["700", "800", "900"]
    ];
    $ar1 = array_replace_recursive($ar1, $ar2);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [
        "a" => "HTML", 
        "b" => "CSS", 
        "c" => "JS"
    ];
    $ar2 = [
        "a" => "PHP", 
        "b" => "MySQL", 
        "c" => "Laravel"
    ];
    //
    $ar1 = array_replace($ar1, $ar2);
    print_r($ar1);
    echo "<br>";
    //
    $ar1 = [
        [
            "a" => "10", 
            "b" => "20", 
            "c" => "30"
        ],
        [
            "d" => "40", 
            "e" => "50", 
            "f" => "60"
        ],
        [
            "g" => "70", 
            "h" => "80", 
            "i" => "90"
        ]
    ];
    $ar2 = [
        [
            "a" => "100", 
            "b" => "200", 
            "c" => "300"
        ],
        [
            "d" => "400", 
            "e" => "500", 
            "f" => "600"
        ],
        [
            "g" => "700", 
            "h" => "800", 
            "i" => "900"
        ]
    ];
    $ar1 = array_replace_recursive($ar1, $ar2);
    print_r($ar1);
    echo "<br>";
?>