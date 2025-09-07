<?php
    class Person{
        public $name, $age;
        //
        function __construct($n, $a){
            $this->name = $n;
            $this->age = $a;
        }
        //
        function show(){
            echo "Name: " . $this->name . "<br>" . "Age: " . $this->age;
        }
    }
    //
    $p1 = new Person("John", 21);
    $p1->show();
?>