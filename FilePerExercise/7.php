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
            function make_tag(string $tag, $text)
            {
                $tag = strtolower($tag);
                
                echo "<" . $tag . ">";
                echo $text;
                echo "</" . $tag . ">";
            }
            
            //Takes an array and prints it out as a <ul> with <li> elements for every item in the array.
            function make_list(array $array)
            {
                echo "<ul>";
                
                foreach($array as $numb)
                {
                    make_tag("li", $numb);
                }

                echo "</ul>";
            }

            $derparray = ["help", 5, "Oh noes!", 58642];

            //make_list( Array );
            make_list($derparray);
        ?>
    </body>
</html>