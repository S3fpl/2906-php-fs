<?php

$score = 66;

$color = 'gray';
$grade = 'N/A';

if ($score >= 95) {
    $color = 'yellow';
    $grade = 'A+';
} elseif ($score >= 90) {
    $color = 'blue';
    $grade = 'A';
} elseif ($score >= 85) {
    $color = 'lightgreen';
    $grade = 'B+';
} elseif ($score >= 80) {
    $color = 'purple';
    $grade = 'B';
} elseif ($score >= 75) {
    $color = 'orange';
    $grade = 'C+';
} elseif ($score >= 70) {
    $color = 'brown';
    $grade = 'C';
} elseif ($score >= 65) {
    $color = 'darkblue';
    $grade = 'D';
} elseif ($score >= 50) {
    $color = 'red';
    $grade = 'E';
} else {
    $color = 'black';
    $grade = 'F';
}

echo "<h3 style='color: $color'>Score $score is $grade</h3>";

?>
