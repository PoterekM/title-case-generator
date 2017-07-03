<?php

class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
    $input_array_of_words = explode(" ", $input_title);
    $output_titlecased = array();

    $str = ucwords($input_title);
    $excluded = array(' a ', ' an ', ' the ', ' for ', ' and ', ' nor ', ' but ', ' or ', ' yet ', ' so ', ' such ', ' as ', ' at ', ' around ', ' by ', ' after ', ' along ', ' for ', ' from ', ' of ', ' on ', ' to ', ' with ', ' without ', ' is ');
    foreach($excluded as $noCap){$str = str_replace(ucwords($noCap),strtolower($noCap),$str);}
    return ucfirst($str);
    foreach ($input_array_of_words as $word) {
        array_push($output_titlecased, ucfirst($word));
    }
    return implode(" ", $output_titlecased);
}

    }
// }

?>
