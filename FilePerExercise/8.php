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
            //Included so I don't need to fill an array myself!
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
            
            //Takes a (preferably) multidimentional array and turns it into a HTML Table.
            //We were allowed to assume that the array ONLY has numbers, and calculate the totals.
            function makeMultiDimTable($array)
            {
                $totalkeys = 0;
                $totalvalues = 0;
                echo "<table>";
                echo "<thead><tr><td>Keys</td><td>Values</td></tr></thead>";
                echo "<tbody>";
                foreach($array as $key => $value)
                {
                    echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
                    $totalkeys += $key;
                    $totalvalues += $value;
                }
                echo "<tr><td colspan=2>Totals</td></tr>";
                echo "<tr><td>" . $totalkeys . "</td><td>" . $totalvalues . "</td></tr>";
                echo "</tbody>";
            }

            //Included so I don't need to fill an array myself!
            $derparray = randFillArray(25);
            
            //makeMultiDimTable( Multidimentional Array );
            makeMultiDimTable($derparray);
        ?>
    </body>
</html>