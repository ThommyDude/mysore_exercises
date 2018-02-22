<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>What are we even doing?</title>
    </head>
    <body>
        <?php
            //Takes a String for the name, a String for the image source, a float for a decimal price and a string that should be in the .
            function makeProduct(string $name, string $img, float $price, string $buttonText): string
            {
                return "<div><img src='../images/" . $img . "' alt='Should be an image here'/><br/><strong>" . $name . "</strong><br/><i>" . round($price, 2) . "</i><br/><button>" . $buttonText . "</button></div>";
            }

            echo makeProduct("Monkey Ball DS", "monkeyball.jpg", 215.88, "Buy that shit!");
        ?>
    </body>
</html>