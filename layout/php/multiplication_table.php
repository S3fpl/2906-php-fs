<?php
function multiply($number, $times)
{
    for ($i = 1; $i <= $times; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}
multiply(3, 5);
