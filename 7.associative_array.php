<?php
// Creating an associative array
$student = array(
    "name" => "Binu",
    "age" => 20,
    "grade" => "A",
    "is_active" => true
);

// Accessing array elements
echo "Student Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Grade: " . $student["grade"] . "<br>";
echo "Active: " . ($student["is_active"] ? "Yes" : "No") . "<br>";

// Modifying array element
$student["age"] = 21;

// Adding a new element
$student["city"] = "New York";

// Removing an element
unset($student["is_active"]);

// Iterating through the array
foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}
?>
