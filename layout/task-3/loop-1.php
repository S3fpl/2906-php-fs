<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/layout/css/card.css">
</head>

<body>
    <div class="card">
        <div class="header">
            <div class="top">
                <div class="circle">
                    <span class="red circle2"></span>
                </div>
                <div class="circle">
                    <span class="yellow circle2"></span>
                </div>
                <div class="circle">
                    <span class="green circle2"></span>
                </div>
                <div class="title">
                    <p id="title2">loop-1 php</p>
                </div>
            </div>
        </div>
        <div class="code-container">
            <textarea class="area" id="code" name="code" readonly="">
                <?php

                $i = 1;
                while ($i <= 10) {
                    echo $i . "\n";
                    $i++;
                }

                ?>
            </textarea>
        </div>
    </div>

</body>

</html>