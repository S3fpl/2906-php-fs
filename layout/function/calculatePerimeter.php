<?php
function calculatePerimeter($width, $height)
{
    return 2 * ($width + $height);
}

$result = calculatePerimeter(5, 10);
echo "Perimeter is: " . $result;
