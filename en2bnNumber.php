<?php
/**
 * Function : English 2 Bangla Number.
 *
 * This function for convert english number to bangla number.
*/

function en2bnNumber ( $number ){
    $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $bn_number = str_replace($replace_array, $search_array, $number);
    return $bn_number;
}

?>