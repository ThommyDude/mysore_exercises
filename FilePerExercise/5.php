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
            //Takes a long String and replaces all "\\n" with <br> tags.
            function switch_br(string $text)
            {
                $text = str_replace("\\n", "\n", $text);
                return nl2br($text);
            }
            
            $derp = "sometimes i
            just don't know
            what
            to
            do!";
            
            //switch_br( String of text with "\\n" ); Returns String where all "\\n" are replaced with <br>
            $derp = switch_br($derp);

            echo $derp;
        ?>
    </body>
</html>