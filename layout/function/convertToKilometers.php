<?php
function convertToKilometers($meters)
{
    return $meters / 1000;
}

$result = convertToKilometers(5000);
echo "Distance in kilometers: " . $result;
