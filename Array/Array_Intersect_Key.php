<?php
    /*$ar1 = [
        "a" => 10,
        "b" => 20, 
        "c" => 30,
        "d" => 40,
        "e" => 50
    ];
    //
    $ar2 = [
        "a" => 10,
        "b" => 20, 
        "c" => 30,
        "f" => 40,
        "g" => 50,
        "d" => 60,
        "e" => 70
    ];
    //
    $ar3 = array_intersect($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_intersect_key($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_intersect_assoc($ar1, $ar2);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    function compare_keys($ar1, $ar2){
        if($ar1 === $ar2){
            return 0;
        }
        return ($ar1 > $ar2) ? 1 : -1;
    }
    //
    $ar3 = array_intersect_ukey($ar1, $ar2, "compare_keys");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    function compare_values($ar1, $ar2){
        if($ar1 === $ar2){
            return 0;
        }
        return ($ar1 > $ar2) ? 1 : -1;
    }
    //
    $ar3 = array_uintersect($ar1, $ar2, "compare_values");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_uintersect_uassoc($ar1, $ar2, "compare_keys", "compare_values");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";*/
    //
    $ar1 = [
        "a" => 10,
        "b" => 20, 
        "c" => 30,
        "d" => 40,
        "e" => 50
    ];
    //
    $ar2 = [
        "a" => 10,
        "b" => 20, 
        "c" => 30,
        "f" => 40,
        "g" => 50,
        "d" => 60,
        "e" => 70
    ];
    //
    $ar3 = array_intersect($ar2, $ar1);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_intersect_key($ar2, $ar1);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_intersect_assoc($ar2, $ar1);
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    function compare_keys($ar2, $ar1){
        if($ar2 === $ar1){
            return 0;
        }
        return ($ar2 > $ar1) ? 1 : -1;
    }
    //
    $ar3 = array_intersect_ukey($ar2, $ar1, "compare_keys");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    function compare_values($ar2, $ar1){
        if($ar1 === $ar2){
            return 0;
        }
        return ($ar1 > $ar2) ? 1 : -1;
    }
    //
    $ar3 = array_uintersect($ar2, $ar1, "compare_values");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
    //
    $ar3 = array_uintersect_uassoc($ar2, $ar1, "compare_keys", "compare_values");
    echo "<pre>";
        print_r($ar3);
    echo "</pre>";
    echo "<br>";
?>