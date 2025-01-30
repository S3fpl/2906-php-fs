<?php
function calculateSpeed($distance, $time)
{
    return $distance / $time;
}

$result = calculateSpeed(100, 2);
echo "Speed is: " . $result . " km/h";
