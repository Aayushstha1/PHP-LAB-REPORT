<?php
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
    return pi() * pow($radius, 2);
}

// Test the function
$radii = [3, 5, 7];
foreach ($radii as $radius) {
    echo "Radius: $radius, Area: " . calculateCircleArea($radius) . "<br>";
}
?>
