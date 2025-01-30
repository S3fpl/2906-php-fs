<?php
function calculateArea($width, $height)
{
    return $width * $height;
}

$result = calculateArea(5, 10);
echo "Area is: " . $result;
