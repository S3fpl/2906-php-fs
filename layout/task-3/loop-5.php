<?php

for ($x = 1; $x <= 12; $x++) {
    echo "Multiplication Table of $x:\n";
    for ($y = 1; $y <= 12; $y++) {
        echo "$x x $y = " . ($x * $y) . "\n";
    }
    echo "\n";
}
