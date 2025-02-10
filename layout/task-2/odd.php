<?php
function checkNumbers($start, $end): void {
    $i = $start;
    do {
        if ($i % 2 !== 0) {
            echo "$i is Odd<br>";
        } else {
            echo "$i is Even<br>";
        }
        $i++;
    } while ($i <= $end);
}

$start = 1;
$end = 10;
checkNumbers($start, $end);
?>
