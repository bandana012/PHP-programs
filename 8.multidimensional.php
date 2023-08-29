<?php
$names = array(
    "binu" => array(
        "age" => 25,
        "city" => "MNR",
        "occupation" => "Engineer"
    ),
    "minu" => array(
        "age" => 30,
        "city" => "MNR",
        "occupation" => "Teacher"
    ),
    "sinu" => array(
        "age" => 22,
        "city" => "Chicago",
        "occupation" => "Artist"
    )
);

// Accessing data
echo "binu's age: " . $names["binu"]["age"] . "\n";
echo "minu's city: " . $names["minu"]["city"] . "\n";
echo "sinu's occupation: " . $names["sinu"]["occupation"] . "\n";
?>
