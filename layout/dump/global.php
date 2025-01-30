<?php

$total = 0;

const VAT = 0.14;
const SRV = 0.05;
function add_sales($price)
{
    $vat = calc_vat($price);
    $srv = calc_service($price);

    global $total;
    $total += $price + VAT;
}

function report()
{
    global $total;
    echo "Total sales: $total<br>";
}

function refund($price)
{
    global $total;

    $total -= $price;
}

function calc_vat($price)
{
    $total = $price + $price * VAT;
    echo "Total vat: $total<br>";
    return $price * VAT;
}

function calc_service($price)
{
    global $total;
    $total += $total * SRV;
    // echo "Total service fee: $total<br>";
    return $price * SRV;
}

report();

add_sales(1000);
report();
add_sales(4500);
add_sales(5000);
add_sales(1500);

refund(1000);
report();
