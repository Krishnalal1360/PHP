<?php
function factorial($n) {
    // Base case
    if ($n == 1) {
        return 1;
    }
    // Recursive case
    return $n * factorial($n - 1); // Multiplication + Subtraction
}

$num = 5;
echo "Factorial of $num is " . factorial($num); // Output: 120
?>
