<?php
function convertToMinutes($hours)
{
    return $hours * 60;
}

$result = convertToMinutes(2);
echo "Minutes: " . $result;
