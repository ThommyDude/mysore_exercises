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
            
            //make_tag( String that defines the tag, String with text to fill the tag );
            make_tag( "h3", "This is a heading" );
            make_tag( "p", "This is a p tag" );

        ?>
    </body>
</html>