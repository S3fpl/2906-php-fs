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

$dumbLinks = [
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

$task2 = [
    ['url' => '/layout/task-2/even.php', 'text' => 'Even'],
    ['url' => '/layout/task-2/odd.php', 'text' => 'Odd'],
];

$task3 = [
    ['url' => '/layout/task-3/loop-1.php', 'text' => 'LOOP-1'],
    ['url' => '/layout/task-3/loop-2.php', 'text' => 'LOOP-2'],
    ['url' => '/layout/task-3/loop-3.php', 'text' => 'LOOP-3'],
    ['url' => '/layout/task-3/loop-4.php', 'text' => 'LOOP-4'],
    ['url' => '/layout/task-3/loop-5.php', 'text' => 'LOOP-5'],
];

$challenge2 = [
    ['url' => '/layout/challenge-2/task-1.php', 'text' => 'task-1'],
    ['url' => '/layout/challenge-2/task-2.php', 'text' => 'task-2'],
    ['url' => '/layout/challenge-2/task-3.php', 'text' => 'task-3'],
];

$allLinks = array_merge($oldLinks, $dumbLinks, $challengeLinks, $challenge2, $newLinks, $task, $task2, $task3);
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
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="name">
            <h1>Seif Ayman Ahmed</h1>
        </div>
        <nav class="links">
            <ul>
                <li><a href="/layout/index.php">Home</a></li>
                <li><a href="/layout/about.php">About</a></li>
                <li><a href="/layout/contact.php">Contact</a></li>
                <li><a href="/layout/logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form id="searchForm">
                <label class="label">
                    <input type="text" class="search_bar" id="searchInput" placeholder="Search for something..." required autocomplete="off" oninput="showSuggestions()" />
                    <div class="shortcut" onclick="performSearch()">Enter</div>
                </label>
                <ul id="suggestionsList" class="suggestions"></ul>
            </form>
        </div>

        <label class="switch">
            <input id="themeToggle" class="toggle" type="checkbox">
            <span class="slider"></span>
            <span class="card-side"></span>
        </label>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const themeToggle = document.getElementById("themeToggle");
            const body = document.body;
            const allLinks = <?php echo json_encode($allLinks); ?>;
            const suggestionsList = document.getElementById("suggestionsList");

            function showSuggestions() {
                let inputValue = formatSearchInput(searchInput.value).toLowerCase();
                suggestionsList.innerHTML = "";

                if (!inputValue) {
                    suggestionsList.style.display = "none";
                    return;
                }

                let filteredLinks = allLinks.filter(link =>
                    link.text.toLowerCase().includes(inputValue)
                );

                if (filteredLinks.length === 0) {
                    suggestionsList.style.display = "none";
                    return;
                }

                filteredLinks.forEach(link => {
                    let listItem = document.createElement("li");
                    listItem.textContent = link.text;
                    listItem.onclick = () => {
                        searchInput.value = link.text;
                        suggestionsList.style.display = "none";
                    };
                    suggestionsList.appendChild(listItem);
                });

                suggestionsList.style.display = "block";
            }

            function performSearch() {
                const searchValue = formatSearchInput(searchInput.value);
                const selectedLink = allLinks.find(link => formatSearchInput(link.text) === searchValue);

                if (selectedLink) {
                    window.location.href = selectedLink.url;
                } else {
                    alert("Page not found! Please select a valid option.");
                }
            }

            function formatSearchInput(input) {
                return input
                    .split(/(\s+)/)
                    .map(word => word.length > 0 ? word.charAt(0).toUpperCase() + word.slice(1).toLowerCase() : word)
                    .join("");
            }

            document.addEventListener("click", function(event) {
                if (!searchInput.contains(event.target) && !suggestionsList.contains(event.target)) {
                    suggestionsList.style.display = "none";
                }
            });

            if (localStorage.getItem("theme") === "dark" || !localStorage.getItem("theme")) {
                body.classList.remove("light-mode");
                themeToggle.checked = false;
            } else {
                body.classList.add("light-mode");
                themeToggle.checked = true;
            }

            themeToggle.addEventListener("change", () => {
                if (themeToggle.checked) {
                    body.classList.add("light-mode");
                    localStorage.setItem("theme", "light");
                } else {
                    body.classList.remove("light-mode");
                    localStorage.setItem("theme", "dark");
                }
            });
            searchInput.addEventListener("input", function() {
                this.value = formatSearchInput(this.value);
            });

            document.addEventListener("keydown", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    performSearch();
                }
            });
        });

        function performSearch() {
            const searchInput = document.getElementById("searchInput").value;
            const formattedSearch = formatSearchInput(searchInput); // تنسيق الإدخال قبل البحث
            const allLinks = <?php echo json_encode($allLinks); ?>;
            const selectedLink = allLinks.find(link => formatSearchInput(link.text) === formattedSearch);

            if (selectedLink) {
                window.location.href = selectedLink.url;
            } else {
                alert("Page not found! Please select a valid option.");
            }
        }

        function formatSearchInput(input) {
            return input
                .split(/(\s+)/)
                .map(word => word.length > 0 ? word.charAt(0).toUpperCase() + word.slice(1).toLowerCase() : word)
                .join("");
        }

        function showSuggestions() {
            let inputValue = formatSearchInput(searchInput.value).toLowerCase();
            suggestionsList.innerHTML = "";

            if (!inputValue) {
                suggestionsList.style.display = "none";
                return;
            }

            let filteredLinks = allLinks.filter(link =>
                link.text.toLowerCase().includes(inputValue)
            );

            if (filteredLinks.length === 0) {
                suggestionsList.style.display = "none";
                return;
            }

            filteredLinks.forEach(link => {
                let listItem = document.createElement("li");
                listItem.textContent = link.text;
                listItem.onclick = () => {
                    searchInput.value = link.text;
                    suggestionsList.style.display = "none";
                    window.location.href = link.url;
                };
                suggestionsList.appendChild(listItem);
            });

            suggestionsList.style.display = "block";
        }

        document.addEventListener("click", function(event) {
            if (!searchInput.contains(event.target) && !suggestionsList.contains(event.target)) {
                suggestionsList.style.display = "none";
            }
        });
    </script>




    <?php
    generateLinks($oldLinks, 'Old Resources');
    generateLinks($dumbLinks, 'Dumb Resources');
    generateLinks($newLinks, 'New Resources');
    generateLinks($challengeLinks, 'Challenge Resources');
    generateLinks($challenge2, 'Challenge Resources');
    generateLinks($task, 'Task');
    generateLinks($task2, 'Task-2');
    generateLinks($task3, 'Task-3');
    ?>
</body>

</html>