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
            //Takes a text as a String and a number and echos it back with <hX> tags, where the X is the number, around it.
            function make_heading(string $text, int $number)
            {
                if($number < 1)
                {
                    $number = 1;
                }
                elseif($number > 6)
                {
                    $number = 6;
                }

                echo "<h" . $number . ">" . $text . "</h" . $number . ">";
            }
            
            //make_heading( String, Number 1~6 );
            make_heading( "This is a heading", 3 );
        ?>
    </body>
</html>