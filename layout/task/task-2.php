<?php
$day_name = 'Monday';

switch ($day_name) {
    case 'Saturday':
    case 'Friday':
        echo "Happy Weekend!";
        break;
    case 'Sunday':
    case 'Monday':
    case 'Tuesday':
    case 'Wednesday':
    case 'Thursday':
        echo "Enjoy your work :)";
        break;
    default:
        echo "Wrong day name!!!";
}
