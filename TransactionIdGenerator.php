<?php
/**
 *  Function: Transaction ID Generator.
 *
 *  Description: 
 *  This function can generate unique transaction id. Using PHP time function
 *  
*/

class TransactionIdGenerator
{
    private $unique_number;
    
    function __construct() {
		$this->unique_number = time();
	}
 
	function TrxId() {
        return chr(rand(65,90)).substr($this->unique_number, 1, -1).chr(rand(65,90));
	}
}

$result = new TransactionIdGenerator();

echo $result->TrxId();