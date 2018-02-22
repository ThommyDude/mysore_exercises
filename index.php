<?php
    include "incl/functions.php";
?>
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
            /* Legacy functions:
            //make_heading( String, Number 1~6 );
            make_heading( "This is a heading", 3 );
            
            //make_paragraph( String );
            make_paragraph( "This is a p tag" );
            */
            
            //make_tag( String that defines the tag, String with text to fill the tag[, String with attributes ]); [] = optional
            make_tag( "h3", "This is a heading", "style='color: purple;'");
            make_tag( "p", "This is a p tag");

            $derpstr = "sometimes i\\njust don't know\\nwhat\\nto\\ndo!";
            //switch_br( String of text with "\\n" ); Returns String where all "\\n" are replaced with <br>
            $derpstr = switch_br($derpstr);

            make_tag( "p", $derpstr, "style='color: darkblue; background-color: hotpink;'");
        ?>
    </body>
</html>