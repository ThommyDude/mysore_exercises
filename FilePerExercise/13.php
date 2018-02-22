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
            //Takes a float and returns it as a string!
            function float_to_string(float $number)
            {
                return number_format($number, 2, ",", ".");
            }

            //float_to_string( Float ); Takes a float and returns a string?
            echo float_to_string(3.768);
        ?>
    </body>
</html>