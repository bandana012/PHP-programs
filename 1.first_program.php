<?php
    // This is a comment
    
    // Variables
    $name = "Sinu";
    $age = 30;
    
    // Outputting variables and strings
    echo "Hello, my name is " . $name . " and I am " . $age . " years old.<br>";
    
    // Conditional statement
    if ($age >= 18) {
        echo "I am an adult.<br>";
    } else {
        echo "I am a student.<br>";
    }
    
    // Array
    $colors = array("red", "green", "blue");
    
    // Loop through an array
    echo "My favorite colors are: ";
    foreach ($colors as $color) {
        echo $color . " ";
    }
    
    // Function
    function greet($name) {
        return "Greetings, " . $name . "!";
    }
    
    echo "<br>" . greet("Sinu");
?>
