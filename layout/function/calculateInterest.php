<?php
function calculateInterest($principal, $rate, $time)
{
    return ($principal * $rate * $time) / 100;
}

$result = calculateInterest(1000, 5, 2);
echo "Simple interest is: " . $result;
