<?php
$grades = array(
    'ram' => 85,
    'shyam' => 92,
    'hari' => 78,
    'gita' => 90,
    'sita' => 88
);
$totalGrades = 0;
$totalStudents = count($grades);
foreach ($grades as $student => $grade) {
    $totalGrades += $grade;
    echo "$student: $grade<br>";
}
$averageGrade = $totalGrades / $totalStudents;
echo "<br>Average Grade: $averageGrade";

?>
