<?php
function compoundInterest($principal, $rate, $time)
{
    return $principal * pow((1 + $rate / 100), $time);
}

$result = compoundInterest(1000, 5, 2);
echo "Compound interest is: " . $result;
