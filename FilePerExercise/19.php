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
            //returns the sum of 1->100
            function one_hundredRek($array = null): int
            {
                if($array === null)
                {
                    $array = range(1, 100);
                }

                if(count($array) >= 1)
                {
                    return array_shift($array) + one_hundredRek($array);
                }
                return 0;
            }

            //returns the sum of $min->$max
            function rangeIter(int $min, int $max): int
            {
                $array = range($min, $max);
                $total = 0;

                while ($array)
                {
                    $total += array_pop($array);
                }

                return $total;
            }

            echo "<p>" . rangeIter(20, 200) . "</p>";
            echo "<p>" . one_hundredRek() . "</p>";
        ?>
    </body>
</html>