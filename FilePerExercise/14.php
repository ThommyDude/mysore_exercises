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
            //Takes an array and adds all the numbers in it together.
            function plusArray(array $array): int
            {
                return array_sum($array);
            }

            //Takes an array and calculates the average of the array before returning it
            function meanArray(array $array): float
            {
                if(count($array) > 0)
                {
                    return array_sum($array)/count($array);
                }
            }

            //plusArray( Array );
            echo "<p>" . plusArray($derparray) . "</p>";
            //meanArray( Array );
            echo "<p>" . meanArray($derparray) . "</p>";
        ?>
    </body>
</html>