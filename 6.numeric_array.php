<?php
// Creating a numeric array
$numbers = array(10, 20, 30, 40, 50);

// Accessing elements of the array
echo "Element at index 0: " . $numbers[0] . "<br>";
echo "Element at index 2: " . $numbers[2] . "<br>";

// Modifying elements of the array
$numbers[1] = 25;
echo "Modified element at index 1: " . $numbers[1] . "<br>";

// Adding elements to the array
$numbers[] = 60; // Adds 60 to the end of the array
array_push($numbers, 70); // Another way to add an element to the end

// Displaying all elements in the array
echo "All elements in the array: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Finding the length of the array
$arrayLength = count($numbers);
echo "Length of the array: " . $arrayLength . "<br>";

// Removing an element from the array
unset($numbers[2]); // Removes the element at index 2

// Displaying all elements after removing
echo "Elements after removal: ";
foreach ($numbers as $num) {
    echo $num . " ";
}
echo "<br>";

// Checking if an element exists in the array
$searchValue = 40;
if (in_array($searchValue, $numbers)) {
    echo "$searchValue exists in the array.<br>";
} else {
    echo "$searchValue does not exist in the array.<br>";

}

// Finding the index of an element
$searchValueIndex = array_search(50, $numbers);
echo "Index of value 50: " . $searchValueIndex . "<br>";
?>
