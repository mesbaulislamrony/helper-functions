<?php
/**
 *  Function: Simple curl api integration.
 *
 *  Description: 
 *  This function can create, edit, delete and show your data from database using api.
 *	This function pass your data in POST method, with encrypted url
 *
*/ 
$data = [
	'column_name' => 'value'
];

$url = 'http://domain-name.com/methods';

$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);

if ($result == 0) {
	echo "Success";
}else{
	echo "Failed";
}
curl_close($curl);

?>