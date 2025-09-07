<?php
    $ar1 = ["10", "20", "30", "40", "50"];
    //
    $ar2 = array_slice($ar1, 0, 3);
    print_r($ar2);
    echo "<br>";
    //
    $ar2 = array_slice($ar1, -3, 3);
    print_r($ar2);
    echo "<br>";
    //
    $ar2 = array_slice($ar1, -3, 3, true);
    print_r($ar2);
    echo "<br>";
?>