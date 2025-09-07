<?php
    class A{
        public $x, $y;
        //
        function __construct(){
            $this->x = 10;
            $this->y = 20;
        }
    }
    class B extends A{
        public $z;
        function add(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }
    //
    $B_obj = new B();
    $res = $B_obj->add();
    echo "Result: " . $res;
?>