<?php
function calculateBMI($weight, $height)
{
    return $weight / ($height * $height);
}

$result = calculateBMI(70, 1.75);
echo "BMI is: " . $result;
