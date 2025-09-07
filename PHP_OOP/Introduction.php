<?php 
    class Calculation{
       public $x, $y, $z;
       function cal(){
            $this->z = $this->x + $this->y;
            return $this->z;
       }
    }
    //
    $c1 = new Calculation();
    $c1->x = 10;
    $c1->y = 20;
    $res = $c1->cal();
    echo "Result: " . $res;
?>