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
            //Takes two strings, searching for the second in the first.
            function mark_search(string $string, string $search)
            {
                $pos = strpos($string, $search);
                if($pos !== false)
                {
                    return "<p>" . substr_replace($string, "<em>" . $search . "</em>", $pos, strlen($search)) . "</p>";
                }
                else
                {
                    return "<p>" . $string . "</p><p>Couldn't find what I was looking for...</p>";
                }
            }

            echo mark_search("sometimes I just don't even know...", "times");
            echo mark_search("But sometimes I do!", "timer");
        ?>
    </body>
</html>