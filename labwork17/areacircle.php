<?php
function calculateCircleArea($radius) {
    $area = 3.14 * $radius * $radius;
    return $area;
}
$radius1 = 6;
$radius2 = 11;
echo "Area of circle with radius $radius1: " . calculateCircleArea($radius1) . "<br>";
echo "Area of circle with radius $radius2: " . calculateCircleArea($radius2) . "<br>";
?>