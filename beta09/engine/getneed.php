<?php
/*
Plugin Name: Getneed

Description: returns need value on a given tshirt id design

Usage: <code>Getneed($id)</code>

Returns: returns integer as need value

Version: 1.0

Author: Radical Graphics Studios

*/

function getneed($id){

	$query=("SELECT * FROM lala_tshirt_rating WHERE lala_designs_id = '$id'");
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if ($row['need']=="") {$ret = 0;} else {$ret=$row['need'];}
	
	return $ret;

}





?>