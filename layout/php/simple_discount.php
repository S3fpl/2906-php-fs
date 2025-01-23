<?php
function applyDiscount($price, $discount)
{
    $discountedPrice = $price - ($price * ($discount / 100));
    echo "Discounted price: $discountedPrice<br>";
}
applyDiscount(200, 20);
