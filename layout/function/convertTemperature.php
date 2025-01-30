<?php
function convertTemperature($celsius)
{
    return ($celsius * 9 / 5) + 32;
}

$result = convertTemperature(25);
echo "Temperature in Fahrenheit: " . $result;
