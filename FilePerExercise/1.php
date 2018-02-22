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
            //Takes a text as String and echos it back with <p> tags around it.
            function make_paragraph(string $text)
            {
                echo "<p>" . $text . "</p>";
            }
            
            //make_paragraph( String );
            make_paragraph( "This is a p tag" );
        ?>
    </body>
</html>