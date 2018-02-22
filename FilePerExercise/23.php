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
            //Takes a String and returns it inside of a strong tag.
            function makeItStrong(string $name): string
            {
                return "<strong>" . $name . "</strong>";
            }

            echo makeItStrong("Monkey Ball DS");
        ?>
    </body>
</html>