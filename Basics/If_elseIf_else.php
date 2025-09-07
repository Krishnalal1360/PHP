<?php
    $a = -1;
    if($a > 0){
        echo "A is greater than 0";
    }else if($a == 1){
        echo "A is equal to 1";
    }else{
        echo "A is less than 0";
    }
    echo "<br>";
    if($a > 0):
        echo "A is greater than 0";
    elseif($a == 1):
        echo "A is equal to 1";
    else:
        echo "A is less than 0";
    endif;
?>