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
            //Takes an array of numbers and returns a int of how many odd numbers there are.
            function oddArray(array $array): int
            {
                $odd = 0;

                foreach($array as $number)
                {
                    if($number & 1)
                    {
                        $odd++;
                    }
                }

                return $odd;
            }

            echo "<p>" . oddArray($derparray) . " odd numbers</p>";
        ?>
    </body>
</html>