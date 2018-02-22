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
            //Takes a string and reverses it "iteratively"
            function reverseThisIter(string $string)
            {
                $stringArray = str_split($string);
                $length = count($stringArray);
                
                for($i = 0; $i < $length; $i++)
                {
                    $newString[] = array_pop($stringArray);
                }
                
                $string = implode("", $newString);
                
                return $string;
            }

            //Takes a string and reverses it "recursively"
            //Way better written... although I like the array thing in ther Iterative version, this is just much neater
            function reverseThisRek(string $string)
            {
                if(strlen($string) > 1)
                {
                    return substr($string, -1) . reverseThisRek(substr($string, 0, -1));
                }
                return $string;
            }

            echo "<h1>" . reverseThisIter("help me dude!") . "</h1>";
            echo "<h1>" . reverseThisRek("why won't you help me?!") . "</h1>";
        ?>
    </body>
</html>