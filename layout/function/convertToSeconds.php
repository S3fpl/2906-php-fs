<?php
function convertToSeconds($days)
{
    return $days * 24 * 60 * 60;
}

$result = convertToSeconds(1);
echo "Seconds: " . $result;
