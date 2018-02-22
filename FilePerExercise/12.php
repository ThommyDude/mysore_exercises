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
            //Takes an float and returns it as a rounded int.
            function roundNumb(float $number): int
            {
                return round($number);
            }

            //roundNumb( Float ); returns rounded float as int.
            echo "<p>" . roundNumb(2.1113) . "</p>";
            echo "<p>" . roundNumb(4.56) . "</p>";
            echo "<p>" . roundNumb(9.63) . "</p>";
        ?>
    </body>
</html>