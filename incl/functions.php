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

    //Takes a String that defines what tag this should be aswell as a string of text that should be IN the tag.
    //Also takes an optional String for the tags attributes. (Optional because not ALL tags need attributes!)
    //Although handy, this does require the user to know/look-up HTML tags.
    function make_tag(string $tag, string $text, string $attr = '')
    {
        $tag = strtolower($tag);
        
        echo "<" . $tag . " " . $attr . ">" . $text . "</" . $tag . ">";
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

?>