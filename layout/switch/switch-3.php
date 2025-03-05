<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output in Styled Terminal</title>
    <link rel="stylesheet" href="/layout/css/terminal.css">
</head>

<body>
    <div class="card">
        <div class="wrap">
            <div class="terminal">
                <hgroup class="head">
                    <p class="title">
                        <svg width="16px" height="16px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none">
                            <path d="M7 15L10 12L7 9M13 15H17M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z"></path>
                        </svg>
                        Terminal
                    </p>
                </hgroup>
                <div class="body">
                    <?php
                    function getStatusColor($status)
                    {
                        return match ($status) {
                            'Cancelled', 'Refunded', 'Complain' => 'red',
                            'Pending', 'On Hold', 'Postponed' => 'blue',
                            'Delivered', 'Shipped', 'Reviewed' => 'green',
                            default => 'gray',
                        };
                    }

                    $status = 'pending';
                    $color = getStatusColor($status);
                    $style = "
                    padding: 0;
                    padding: 40px;
                    border-radius: 5px;
                    color: white;
                    text-align: center;
                    background-color: $color;
                ";
                    echo "<pre><code>" . htmlspecialchars('
function getStatusColor($status) {
    return match ($status) {
        "Cancelled", "Refunded", "Complain" => "red",
        "Pending", "On Hold", "Postponed" => "blue",
        "Delivered", "Shipped", "Reviewed" => "green",
        default => "gray",
    };
}
') . "</code></pre>";

                    echo "<p style='color: $style; font-size: 20px; font-weight: bold;'>Status: $status, Color: $color</p>";

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>