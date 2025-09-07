<?php
    for($a=1;$a<=5;$a++){
        if($a == 4){
            goto label_name;
        }else{
            echo $a;
        }
    }
    label_name:
    echo "<br>"."Out Of For Loop!";
?>