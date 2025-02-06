<?php
function generateLinks($links, $sectionTitle)
{
    echo '<div class="link-section">';
    echo '<h3>' . $sectionTitle . '</h3>';
    echo '<ul>';
    foreach ($links as $link) {
        echo '<li><a href="' . $link['url'] . '">' . $link['text'] . '</a></li>';
    }
    echo '</ul>';
    echo '</div>';
}

$oldLinks = [
    ['url' => '/layout/php/simple_greeting.php', 'text' => 'Simple Greeting'],
    ['url' => '/layout/php/age_message.php', 'text' => 'Age Message'],
    ['url' => '/layout/php/sum_of_two_numbers.php', 'text' => 'Sum of Two Numbers'],
    ['url' => '/layout/php/multiplication_table.php', 'text' => 'Multiplication Table'],
    ['url' => '/layout/php/full_name.php', 'text' => 'Full Name'],
    ['url' => '/layout/php/person_introduction.php', 'text' => 'Person Introduction'],
    ['url' => '/layout/php/simple_discount.php', 'text' => 'Simple Discount'],
    ['url' => '/layout/php/rectangle_area.php', 'text' => 'Rectangle Area'],
    ['url' => '/layout/php/simple_calculator.php', 'text' => 'Simple Calculator'],
    ['url' => '/layout/php/temperature_converter.php', 'text' => 'Temperature Converter'],
    ['url' => '/layout/php/circle_area.php', 'text' => 'Circle Area'],
    ['url' => '/layout/php/discount_price.php', 'text' => 'Discount Price'],
    ['url' => '/layout/php/concat_strings.php', 'text' => 'Concat Strings'],
    ['url' => '/layout/php/exchange_rate.php', 'text' => 'Exchange Rate'],
    ['url' => '/layout/php/add_prefix_to_name.php', 'text' => 'Add Prefix to Name'],
    ['url' => '/layout/php/string_length.php', 'text' => 'Length of a String'],
    ['url' => '/layout/php/personalized_welcome.php', 'text' => 'Personalized Welcome'],
    ['url' => '/layout/php/power_of_number.php', 'text' => 'Power of Number'],
];

$dumbLinks=[
    ['url' => '/layout/dump/dump.php', 'text' => 'Dumb'],
    ['url' => '/layout/dump/global.php', 'text' => 'Global'],
    ['url' => '/layout/dump/practice.php', 'text' => 'Practice'],
];

$challengeLinks = [
    ['url' => '/layout/challenge/introduce.php', 'text' => 'Introduce'],
    ['url' => '/layout/challenge/fullName.php', 'text' => 'Full Name'],
    ['url' => '/layout/challenge/product.php', 'text' => 'Product'],
    ['url' => '/layout/challenge/book.php', 'text' => 'Book'],
    ['url' => '/layout/challenge/contact.php', 'text' => 'Contact'],
    ['url' => '/layout/challenge/movie.php', 'text' => 'Movie'],
];



$newLinks = [
    ['url' => '/layout/function/addNumbers.php', 'text' => 'Add Numbers'],
    ['url' => '/layout/function/multiply.php', 'text' => 'Multiply'],
    ['url' => '/layout/function/divide.php', 'text' => 'Divide'],
    ['url' => '/layout/function/calculateArea.php', 'text' => 'Calculate Area'],
    ['url' => '/layout/function/square.php', 'text' => 'Square'],
    ['url' => '/layout/function/cube.php', 'text' => 'Cube'],
    ['url' => '/layout/function/convertToMinutes.php', 'text' => 'Convert Hours to Minutes'],
    ['url' => '/layout/function/convertToSeconds.php', 'text' => 'Convert Days to Seconds'],
    ['url' => '/layout/function/calculatePerimeter.php', 'text' => 'Calculate Perimeter'],
    ['url' => '/layout/function/average.php', 'text' => 'Calculate Average'],
    ['url' => '/layout/function/convertTemperature.php', 'text' => 'Convert Celsius to Fahrenheit'],
    ['url' => '/layout/function/calculateSpeed.php', 'text' => 'Calculate Speed'],
    ['url' => '/layout/function/hypotenuse.php', 'text' => 'Calculate Hypotenuse'],
    ['url' => '/layout/function/power.php', 'text' => 'Calculate Power'],
    ['url' => '/layout/function/modulus.php', 'text' => 'Calculate Modulus'],
    ['url' => '/layout/function/calculateBMI.php', 'text' => 'Calculate BMI'],
    ['url' => '/layout/function/convertToKilometers.php', 'text' => 'Convert Meters to Kilometers'],
    ['url' => '/layout/function/calculateInterest.php', 'text' => 'Calculate Simple Interest'],
    ['url' => '/layout/function/compoundInterest.php', 'text' => 'Calculate Compound Interest'],
    ['url' => '/layout/function/findPercentage.php', 'text' => 'Calculate Percentage'],
];

$task = [
    ['url' => '/layout/task/task-1.php', 'text' => 'Task 1'],
    ['url' => '/layout/task/task-2.php', 'text' => 'Task 2'],
];

$challenge2 = [
    ['url' => '/layout/challenge-2/task-1.php', 'text' => 'task-1'],
    ['url' => '/layout/challenge-2/task-2.php', 'text' => 'task-2'],
];
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Challenges</title>
        <link rel="stylesheet" href="/layout/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <div class="header">
            <h1>PHP Challenges</h1>
        </div>
        <div class="card">
            <h2>Seif Ayman Ahmed</h2>
        </div>
        
        <?php
    // Old Links Section
    generateLinks($oldLinks, 'Old Resources');
    // Dumb Links Section
    generateLinks($dumbLinks, 'Dumb Resources');
    // New Links Section
    generateLinks($newLinks, 'New Resources');
    // Challenge Links Section
    generateLinks($challengeLinks, 'Challenge Resources');
    // Task Links Section
    generateLinks($task, 'Task');
    // Challenge 2 Links Section
    generateLinks($challenge2, 'Challenge Resources');
    ?>

</body>

</html>