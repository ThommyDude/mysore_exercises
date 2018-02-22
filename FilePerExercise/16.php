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
            //Takes an int (positive or negative) and makes a double of its positive version
            function doubleIt(int $number): int
            {
                $number = abs($number);
                return ($number + $number);
            }

            //doubleIt( Int [negative or positive number] );
            echo "<h1>" . doubleIt(-50) . "</h1>";
            echo "<h1>" . doubleIt(20) . "</h1>";
        ?>
    </body>
</html>