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
            //Takes a String and returns the same String but capitalized.
            function capitalize(string $name): string
            {
                return strtoupper($name);
            }

            //capitalize( String ); returns input string capitalized.
            echo capitalize("steve");
        ?>
    </body>
</html>