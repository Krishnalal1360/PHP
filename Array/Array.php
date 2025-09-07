<?php
    $arr = array("10", "20", "30");
    echo $arr[0] . "<br>";
    var_dump($arr[0]);
    //
    echo "<br>" . "Iterating elements: " . "<br>";
    for($index=0;$index<count($arr);$index++){
        echo $arr[$index] . "<br>";
    }
    $arr = [
        ["10", "20", "30"],
        ["40", "50", "60"],
        ["70", "80", "90"]
    ];
    //
    echo "<br>" . "Iterating Nested Array elements: " . "<br>";
    foreach($arr as $row){
        foreach($row as $col){
            echo $col . " ";
        }
        echo "<br>";
    }
?>

