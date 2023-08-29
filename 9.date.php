<?php
// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Display the current date and time
echo "Current Date and Time: " . $currentDateTime . "<br>";

// Get the current year, month, day, hour, minute, and second separately
$currentYear = date("Y");
$currentMonth = date("m");
$currentDay = date("d");
$currentHour = date("H");
$currentMinute = date("i");
$currentSecond = date("s");

echo "Year: " . $currentYear . "<br>";
echo "Month: " . $currentMonth . "<br>";
echo "Day: " . $currentDay . "<br>";
echo "Hour: " . $currentHour . "<br>";
echo "Minute: " . $currentMinute . "<br>";
echo "Second: " . $currentSecond . "<br>";

// Formatting a specific date
$someDate = "2023-08-29 15:30:00";
$formattedDate = date("F j, Y, g:i a", strtotime($someDate));
echo "Formatted Date: " . $formattedDate . "<br>";

// Adding or subtracting time
$currentTime = time();  // Current Unix timestamp
$futureTime = $currentTime + (7 * 24 * 60 * 60); // Adding 7 days
$futureDate = date("Y-m-d H:i:s", $futureTime);
echo "Future Date: " . $futureDate . "<br>";
?>
