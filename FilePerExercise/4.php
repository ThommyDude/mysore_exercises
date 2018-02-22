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
            //Takes a String that defines what tag this should be aswell as a string of text that should be IN the tag.
            //Also takes an optional String for the tags attributes. (Optional because not ALL tags need attributes!)
            //Although handy, this does require the user to know/look-up HTML tags.
            function make_tag(string $tag, string $text, string $attr = '')
            {
                $tag = strtolower($tag);
                
                echo "<" . $tag . " " . $attr . ">" . $text . "</" . $tag . ">";
            }

            //make_tag( String that defines the tag, String with text to fill the tag[, String with attributes ]); [] = optional
            make_tag( "h3", "This is a heading", "style='color: purple;'");
            make_tag( "p", "This is a p tag");
        ?>
    </body>
</html>