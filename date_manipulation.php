<?php
/**
 * Function : Date Format.
 *
 * Multiple date format functions.
*/


/*
 * Convert date to database and database to date
*/

function dt2db( $date )
{
	return date("Y-m-d", strtotime( $date ));
}

function db2dt( $date )
{
	return date("d M Y", strtotime( $date ));
}


/*
 * Convert Timestamp to date and time format
*/

function t2d( $timestamp ){
	return date('Y-m-d', $timestamp);
}

function t2t( $timestamp ){
	return date('h:i:s A', $timestamp);
}

?>