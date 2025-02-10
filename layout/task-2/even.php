<?php
function checkNumbers($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 !== 0) {
            echo "$i is Odd<br>";
        } else {
            echo "$i is Even<br>";
        }
    }
}

$start = 1;
$end = 10;
checkNumbers($start, $end);
