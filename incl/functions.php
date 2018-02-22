<?php

    /* Keeping these for "Legacy" purposes.

    //Takes a text as String and echos it back with <p> tags around it.
    function make_paragraph(string $text)
    {
        echo "<p>" . $text . "</p>";
    }

    //Takes a text as a String and a number and echos it back with <hX> tags, where the X is the number, around it.
    function make_heading(string $text, int $number)
    {
        if($number < 1)
        {
            $number = 1;
        }
        elseif($number > 6)
        {
            $number = 6;
        }

        echo "<h" . $number . ">" . $text . "</h" . $number . ">";
    }

    */

    //Takes a String that defines what tag this should be aswell as anything to fill it with.
    //Also takes an optional String for the tags attributes. (Optional because not ALL tags need attributes!)
    //Although handy, this does require the user to know/look-up HTML tags.
    function make_tag(string $tag, $text, string $attr = '')
    {
        $tag = strtolower($tag);
        
        echo "<" . $tag . ">";
        echo $text;
        echo "</" . $tag . ">";
    }

    //Takes a long String and replaces all "\\n" with <br> tags.
    function switch_br(string $text)
    {
        $text = str_replace("\\n", "\n", $text);
        return nl2br($text);
    }

    //Needs 1 number(int) which is the amount of numbers you want IN the returned array.
    //2 optional numbers for the min and max to use for generating the random numbers. standard is between 0 and getrandmax().
    function randFillArray(int $numb, int $min = 0, int $max = null): array
    {
        if($max === null)
        {
            $max = getrandmax();
        }

        for($i = 0; $i < $numb; $i++)
        {
            $array[] = rand($min, $max);
        }
        return $array;
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

    //Takes a (preferably) multidimentional array and turns it into a HTML Table.
    //We were allowed to assume that the array ONLY has numbers, and calculate the totals.
    function makeMultiDimTable($array)
    {
        $totalkeys = 0;
        $totalvalues = 0;
        echo "<table>";
        echo "<thead><tr><td>Keys</td><td>Values</td></tr></thead>";
        echo "<tbody>";
        foreach($array as $key => $value)
        {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
            $totalkeys += $key;
            $totalvalues += $value;
        }
        echo "<tr><td colspan=2>Totals</td></tr>";
        echo "<tr><td>" . $totalkeys . "</td><td>" . $totalvalues . "</td></tr>";
        echo "</tbody>";
    }

    //Takes a String and returns the same String but capitalized.
    function capitalize(string $name): string
    {
        return strtoupper($name);
    }
?>