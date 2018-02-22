<?php
    include "incl/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            table, th, td
            {
                width: 50%;
                text-align: center;
                border: 1px solid black;
            }
        </style>
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

            $derpstr = "sometimes i
            just don't know
            what
            to
            do!";
            //switch_br( String of text with "\\n" ); Returns String where all "\\n" are replaced with <br>
            $derpstr = switch_br($derpstr);

            make_tag( "p", $derpstr, "style='color: darkblue; background-color: hotpink;'");

            //randFillArray( Number amount of numbers in array[, Number lowest number for rand(), Number highest number for rand()]);
            $derparray = randFillArray(50, 0, 7);

            //make_list( Array );
            make_list($derparray);

            //makeMultiDimTable( Multidimentional Array );
            makeMultiDimTable($derparray);

            //capitalize( String ); returns input string with the FIRST character capitalized.
            make_tag("h2", capitalize("steve"));
        ?>
    </body>
</html>