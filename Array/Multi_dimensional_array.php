<?php
    $arr = array(
        array(10, 20, 30),
        array(40, 50, 60),
        array(70, 80, 90)
    );
    //
    echo "Iterating Multi-dimensional Array: " . "<br>";
    //
    for($row=0;$row<count($arr);$row++){
        for($col=0;$col<count($arr[$row]);$col++){
            echo $arr[$row][$col] . " ";
        }
        echo "<br>";
    }
    //
    echo "Iterating Multi-dimensional Array: " . "<br>";
    //
    foreach($arr as $row){
        foreach($row as $col){
            echo $col . " ";
        }
        echo "<br>";
    }
?>