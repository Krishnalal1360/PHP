<?php
    $ar1 = ["HTML", "CSS", "JS"];
    array_push($ar1, "PHP");
    print_r($ar1);
    echo "<br>";
    //
    array_push($ar1, "Laravel", "CodeIgniter", "Symfony");
    print_r($ar1);
    echo "<br>";
    //
    array_pop($ar1);
    print_r($ar1);
    echo "<br>";
?>