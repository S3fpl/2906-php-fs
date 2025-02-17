<pre>
<?php
$ages = [50, 30, 20, 15, 66, 80, 40, 50, 6, 22, 30, 21, 11, 21, 2, 60];

function is_old($age) {
    return $age >= 21;
}

function is_young($age){
    return $age < 21;
}

$old_ages = array_filter($ages,'is_old');
$young_ages = array_filter($ages,'is_young');

echo "Old age: ";
var_dump(array_values($old_ages));
echo "young age: ";
var_dump(array_values($young_ages));