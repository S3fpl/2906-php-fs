<?php
function getDiscountedPrice($price, $discount)
{
    $discountedPrice = $price - ($price * ($discount / 100));
    echo "Discounted price: $discountedPrice<br>";
}
getDiscountedPrice(150, 15);
