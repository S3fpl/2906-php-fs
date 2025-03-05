<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Challenges</title>
    <link rel="stylesheet" href="/layout/css/style.css">
    <link rel="stylesheet" href="/layout/css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <header class="header">
        <div class="name">
            <h1>Seif Ayman </h1>
        </div>
        <nav class="links">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/layout/about.php">About</a></li>
                <li><a href="/layout/contact.php">Contact</a></li>
                <li><a href="/layout/logout.php">Logout</a></li>
            </ul>
        </nav>

        <div class="auth-buttons">
            <button class="btn" onclick="loadForm('login')">Login</button>
            <button class="btn" onclick="loadForm('signup')">Sign Up</button>
        </div>

        <div id="overlay" class="overlay" onclick="closeForm()"></div>

    </header>
    <div id="formContainer" class="form-popup"></div>

    <?php include 'layout/php/main.php'; ?>

    <script>
        function loadForm(formType) {
            $.ajax({
                url: 'layout/php/' + formType + '.php',
                type: 'GET',
                success: function(data) {
                    $("#formContainer").html(data).show();
                    $("#overlay").show();
                },
                error: function() {
                    alert('Error loading the form');
                }
            });
        }

        function closeForm() {
            $("#formContainer").hide();
            $("#overlay").hide();
        }
    </script>
</body>

</html>