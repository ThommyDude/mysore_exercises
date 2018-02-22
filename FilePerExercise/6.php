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
            //Needs 1 number(int) which is the amount of numbers you want IN the returned array.
            //2 optional numbers for the min and max to use for generating the random numbers. standard is between 0 and getrandmax().
            function randFillArray(int $numb, int $min = 0, int $max = null): array
            {
                if($max === null)
                {
                    $max = getrandmax();
                }

                for($i = 0; $i < $numb; $i++)
                {
                    $array[] = rand($min, $max);
                }
                return $array;
            }
            
            //randFillArray( Number amount of numbers in array[, Number lowest number for rand(), Number highest number for rand()]);
            $derparray = randFillArray(50, 0, 7);
            echo "<ul>";
            foreach($derparray as $numb)
            {
                echo "<li>" . $numb . "</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>