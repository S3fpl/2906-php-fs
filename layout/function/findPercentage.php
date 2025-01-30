<?php
function findPercentage($value, $total)
{
    return ($value / $total) * 100;
}

$result = findPercentage(25, 100);
echo "Percentage is: " . $result . "%";
