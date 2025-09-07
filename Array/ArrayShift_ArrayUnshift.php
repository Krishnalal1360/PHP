<?php
    $ar1 = ["HTML", "CSS", "JS"];
    print_r($ar1);
    echo "<br>";
    //
    array_shift($ar1);
    print_r($ar1);
    echo "<br>";
    //
    array_unshift($ar1, "HTML");
    print_r($ar1);
    echo "<br>";
    //
    array_unshift($ar1, "PHP", "Laravel");
    print_r($ar1);
    echo "<br>";
?>