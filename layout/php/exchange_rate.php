<?php
function convertCurrency($amountEGP, $rate)
{
    $convertedAmount = $amountEGP * $rate;
    echo "Converted amount: $convertedAmount<br>";
}
convertCurrency(1000, 0.032);
