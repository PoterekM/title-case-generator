<?php

class TitleCaseGenerator
{
    // function makeTitleCase($input_title)
    // {
    // $input_array_of_words = explode(" ", $input_title);
    // $output_titlecased = array();
    // foreach ($input_array_of_words as $word) {
    //     array_push($output_titlecased, ucfirst($word));
    // }

    function makeTitleCase($input_title)
    {
    $str = ucwords($input_title);
    $exclude = 'a,an,the,for,and,nor,but,or,yet,so,such,as,at,around,by,after,along,for,from,of,on,to,with,without';
    $excluded = explode(",",$exclude);
    foreach($excluded as $noCap){$str = str_replace(ucwords($noCap),strtolower($noCap),$str);}
    return ucfirst($str);
    }

    // return implode(" ", $output_titlecased);
    // }
}

?>
