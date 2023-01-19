<?php
/**
 *  Function: k Format.
 *
 *  Description: 
 *  This function for convert any number to sort format. (Ex. 3.5k)
 *
*/ 
function kFormat( $number ) {

    if( $number > 1000 ) {

        $round = round($number);
        $number_format = number_format($round);
        $explode = explode(',', $number_format);
        $extension = ['k', 'm', 'b', 't'];
        $total_separator = count($explode) - 1;
        
        $result = $explode[0];
        $result .= ((int) $explode[1][0] !== 0) ? '.' . $explode[1][0] : '';
        $result .= $extension[($total_separator <= 3) ? $total_separator - 1 : 3];
        
        return $result;
        
    }

    return $number;
}

print_r(kFormat(9999));

?>