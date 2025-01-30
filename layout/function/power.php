<?php
function power($base, $exponent)
{
    return pow($base, $exponent);
}

$result = power(2, 3);
echo "Power result is: " . $result;
