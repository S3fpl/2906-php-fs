<?php
function convertToCelsius($fahrenheit)
{
    $celsius = ($fahrenheit - 32) * 5 / 9;
    echo "Temperature in Celsius: $celsius<br>";
}
convertToCelsius(98.6);
