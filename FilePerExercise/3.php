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
            //Although handy, this does require the user to know/look-up HTML tags.
            function make_tag(string $tag, string $text)
            {
                $tag = strtolower($tag);
                
                echo "<" . $tag . ">" . $text . "</" . $tag . ">";
            }
            
            //make_tag( String that defines the tag, String with text to fill the tag );
            make_tag( "h3", "This is a heading");
            make_tag( "p", "This is a p tag");
        ?>
    </body>
</html>