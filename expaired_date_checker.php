<?php
/**
 * Function : Expaired Date Checker.
 *
 * Calculate between two date.
 * Using PHP, Object, Date Functions
 * This calculator for calulate expaired date duration on current date.
*/

$expair_date = new DateTime('10 Oct 2019');
$today = new DateTime('5 Oct 2019');

function is_expaired( $today, $expaired_date ){
    
    $r = $today->diff( $expaired_date );
    $obj = new stdClass();
    $obj->is_expaired = $r->invert;
    $obj->duration = ($r->days != 0) ? (($r->y > 0) ? $r->y . ' years ' : '').''.(($r->m > 0) ? $r->m . ' months ' : '').''.(($r->d > 0) ? $r->d . ' days' : '').''.(($r->invert == 1) ? ' Expaired' : ' Remaining') : 'Today';
    return $obj;
    
}
echo is_expaired($today, $expair_date)->duration;
?>