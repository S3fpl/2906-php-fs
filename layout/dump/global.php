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

                    $total = 0;

                    const VAT = 0.14;
                    const SRV = 0.05;
                    function add_sales($price)
                    {
                        $vat = calc_vat($price);
                        $srv = calc_service($price);

                        global $total;
                        $total += $price + VAT;
                    }

                    function report()
                    {
                        global $total;
                        echo "Total sales: $total<br>";
                    }

                    function refund($price)
                    {
                        global $total;

                        $total -= $price;
                    }

                    function calc_vat($price)
                    {
                        $total = $price + $price * VAT;
                        echo "Total vat: $total<br>";
                        return $price * VAT;
                    }

                    function calc_service($price)
                    {
                        global $total;
                        $total += $total * SRV;
                        // echo "Total service fee: $total<br>";
                        return $price * SRV;
                    }

                    report();

                    add_sales(1000);
                    report();
                    add_sales(4500);
                    add_sales(5000);
                    add_sales(1500);

                    refund(1000);
                    report();
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>