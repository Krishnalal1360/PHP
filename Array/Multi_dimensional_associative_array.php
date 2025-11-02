<?php
// Multi-dimensional associative array
$students = [
    "John" => [
        "age" => 20,
        "grade" => "A",
        "subjects" => [
            "Math" => 90,
            "Science" => 85,
            "English" => 88
        ]
    ],
    "Alice" => [
        "age" => 22,
        "grade" => "B+",
        "subjects" => [
            "Math" => 78,
            "Science" => 82,
            "English" => 80
        ]
    ],
    "Bob" => [
        "age" => 21,
        "grade" => "A-",
        "subjects" => [
            "Math" => 88,
            "Science" => 90,
            "English" => 84
        ]
    ]
];

// Accessing elements
echo "John's Science marks: " . $students["John"]["subjects"]["Science"] . "<br>";
echo "Alice's age: " . $students["Alice"]["age"] . "<br>";

// Looping through the array
foreach ($students as $name => $details) {
    echo "<h3>Student: $name</h3>";
    echo "Age: " . $details["age"] . "<br>";
    echo "Grade: " . $details["grade"] . "<br>";
    echo "Subjects:<br>";
    foreach ($details["subjects"] as $subject => $marks) {
        echo " - $subject: $marks<br>";
    }
    echo "<br>";
}
?>
