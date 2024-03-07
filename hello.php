<?php
//to print helo world
echo"helloworld<br>";

//to display the area
$length="10";
$width="12";
$area=$length*$width;
echo"area is: {$area}<br>";

//to swap the variable 

$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping: a = $a, b = $b<br>";

//logical operqtor
$grade = 85;

if ($grade >= 90) {
    echo "Excellent!<br>";
} elseif ($grade >= 80 && $grade < 90) {
    echo "Good job!<br>";
} elseif ($grade >= 70 && $grade < 80) {
    echo "You passed.<br>";
} else {
    echo "You need improvement.<br>";
}

// switch statement.

$day = 5;
switch ($day) {

    case 1:
        echo "Day $day is Sunday.<br>";
        break;
    case 2:
        echo "Day $day is Monday.<br>";
        break;
    case 3:
        echo "Day $day is Tuesday.<br>";
        break;
    case 4:
        echo "Day $day is Wednesday.<br>";
        break;
    case 5:
        echo "Day $day is Thursday.<br>";
        break;
    case 6:
        echo "Day $day is Friday.<br>";
        break;
    case 7:
        echo "Day $day is Saturday.<br>";
        break;
    
    default:
        echo "Invalid day number.<br>";
}
// while loop.
$number = 1;

while ($number <= 10) {
    echo $number . " ";
    $number++;
    echo"<br>";
}
//using a loop.
$countries = array("USA", "UAE", "UK", "Nepal", "Japan");
echo "Countries: ";
foreach ($countries as $country) {
    echo $country . " ";
    echo"<br><br>";
}
//using foreach looop
$numericArray = array(10, 20, 30, 40, 50);
echo "Array elements: ";
foreach ($numericArray as $element) {
    echo $element . " ";
}
?>
