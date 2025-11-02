<?php
  /*$ar1 = [10, 20, 30, 40, 50];
  echo "<pre>";
    print_r($ar1);
  echo "</pre>";
  //
  list($a, $b, $c, $d, $e) = $ar1;
  echo "The value of \$a is $a <br>";
  echo "The value of \$b is $b <br>";
  echo "The value of \$c is $c <br>";
  echo "The value of \$d is $d <br>";
  echo "The value of \$e is $e <br>";*/
  //
  /*$ar1 = [
          "a" => 10,
          "b" => 20,
          "c" => 30,
          "d" => 40,
          "e" => 50
  ];
  list($a, $b, $c, $d, $e) = array_values($ar1);
  echo "The value of a key is $a <br>";
  echo "The value of b key is $b <br>";
  echo "The value of c key is $c <br>";
  echo "The value of d key is $d <br>";
  echo "The value of e key is $e <br>";*/
  //
// Multi-dimensional array list
$students = [
    ["John", 20, "A"],
    ["Alice", 22, "B+"],
    ["Bob", 21, "A-"]
];

// Using foreach with key and list()
foreach ($students as $index => list($name, $age, $grade)) {
    echo "Index: $index | Name: $name | Age: $age | Grade: $grade<br>";
}
//
// Multi-dimensional associative array
$students = [
    ["name" => "John",  "age" => 20, "grade" => "A"],
    ["name" => "Alice", "age" => 22, "grade" => "B+"],
    ["name" => "Bob",   "age" => 21, "grade" => "A-"]
];

// Using foreach with key and list()
foreach ($students as $index => ["name" => $name, "age" => $age, "grade" => $grade]) {
    echo "Index: $index | Name: $name | Age: $age | Grade: $grade<br>";
}
?>