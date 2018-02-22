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
            function fibnib(int $number)
            {
                if($number === 1)
                {
                    return 1;
                }
                elseif($number <= 0)
                {
                    return 0;
                }
        
                return fibnib($number - 1) + fibnib($number - 2);
            }

            echo fibnib(10);
        ?>
    </body>
</html>