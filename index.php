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

            make_tag("p", fibnib(10));

            //roundNumb( Float ); returns rounded float as int.
            make_tag("p", roundNumb(4.56));
            make_tag("p", roundNumb(2.1113));
            make_tag("p", roundNumb(9.63));

            //float_to_string( Float ); Takes a float and returns a string?
            echo float_to_string(3.768);

            //capitalize( String ); returns input string with the FIRST character capitalized.
            make_tag("h2", capitalize("steve"));
            
            //randFillArray( Number amount of numbers in array[, Number lowest number for rand(), Number highest number for rand()]);
            $derparray = randFillArray(50, 0, 7);

            //rekSumArray( Array of ints );
            make_tag("h2", rekSumArray($derparray));

            //one_hundredRek();
            make_tag("h3", rangeRek(25, 750));
            
            //rekSumArray( int min, int max );
            make_tag("h3", rangeIter(20, 200));
            
            //plusArray( Array );
            make_tag("h6", plusArray($derparray));
            //meanArray( Array );
            make_tag("h6", meanArray($derparray));

            //dayToNumber( String ["monday", "tuesday", "wednesday", "thrusday", "friday", "saturday", "sunday"] );
            make_tag("h2", dayToNumber("ThURsdaY"));

            //doubleIt( Int [negative or positive number] );
            make_tag("h1", doubleIt(-50));
            make_tag("h1", doubleIt(20));
            
            //make_list( Array );
            make_list($derparray);

            //makeMultiDimTable( Multidimentional Array );
            makeMultiDimTable($derparray);
        ?>
    </body>
</html>