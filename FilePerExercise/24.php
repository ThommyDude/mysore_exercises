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
            //Takes a String for the name, a String for the image source.
            function makeProduct(string $name, string $img)//: string
            {
                return "<div><img src='../images/" . $img . "' alt='Should be an image here'/><br/><strong>" . $name . "</strong></div>";
            }

            echo makeProduct("Monkey Ball DS", "monkeyball.jpg");
        ?>
    </body>
</html>