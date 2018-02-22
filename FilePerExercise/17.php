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
            //Takes array of ints and returns the sum
            function rekSumArray(array $array): int
            {
                if(count($array) >= 1)
                {
                    return array_shift($array) + rekSumArray($array);
                }
                return 0;
            }

            //Takes array of ints and returns the sum
            function iterSumArray(array $array): int
            {
                $total = 0;
                while ($array)
                {
                    $total += array_pop($array);
                }

                return $total;
            }

            echo "<p>" . rekSumArray($derparray) . "</p>";
            
            echo "<p>" . iterSumArray($derparray) . "</p>";
        ?>
    </body>
</html>