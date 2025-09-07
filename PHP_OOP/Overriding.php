<?php
    class A{
        public $x = 10;
        //
        public function show(){
            echo "In A, x: " . $this->x . "<br>";
        }
    }
    class B extends A{
        public $x = 20;
        //
        public function show(){
            echo "In B, x: " . $this->x . "<br>";
        }
    }
    //
    $B_obj = new B();
    $res = $B_obj->x;
    echo  $B_obj->x;
    echo "<br>";
    $B_obj->show();
?>