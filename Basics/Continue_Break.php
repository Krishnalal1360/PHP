<?php
    for($a=1;$a<=10;$a++){
        if($a%2 == 0){
            continue;
        }else{
            echo $a."<br>";
        }
    }
    echo "<br>";    
    for($a=1;$a<=10;$a++){
        if($a == 6){
            break;
        }else{
            echo $a."<br>";
        }
    }
?>