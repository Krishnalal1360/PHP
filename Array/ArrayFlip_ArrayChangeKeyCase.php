<?php
    $ar1 = [
        "alex" => 21,
        "peter" => 22,
        "michael" => 23
    ];
    //
    $ar1 = array_flip($ar1);
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    //
    $ar1 = array_flip($ar1);
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    //
    $ar1 = array_change_key_case($ar1, CASE_UPPER);
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
    //
    $ar1 = array_change_key_case($ar1, CASE_LOWER);
    echo "<pre>";
        print_r($ar1);
    echo "</pre>";
?>