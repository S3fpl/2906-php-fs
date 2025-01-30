<?php
function hypotenuse($sideA, $sideB)
{
    return sqrt($sideA * $sideA + $sideB * $sideB);
}

$result = hypotenuse(3, 4);
echo "Hypotenuse is: " . $result;
