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
            //Takes a string with a day of the week and returns a number according to the day of the week.
            function dayToNumber(string $day): int
            {
                $day = strtolower($day);
                switch($day)
                {
                    case 'monday':
                        return 1;
                        break;
                    
                    case 'tuesday':
                        return 2;
                        break;

                    case 'wednesday':
                        return 3;
                        break;

                    case 'thursday':
                        return 4;
                        break;

                    case 'friday':
                        return 5;
                        break;

                    case 'saturday':
                        return 6;
                        break;

                    case 'sunday':
                        return 7;
                        break;
                }
            }

            //dayToNumber( String ["monday", "tuesday", "wednesday", "thrusday", "friday", "saturday", "sunday"] );
            echo "<h2>" . dayToNumber("ThURsdaY") . "</h2>";
        ?>
    </body>
</html>