<?php
/*
Plugin Name: Getlove

Description: returns love value on a given tshirt id design

Usage: <code>Getlove($id)</code>

Returns: returns integer as love value

Version: 1.0

Author: Radical Graphics Studios

*/

function getlove($id){

	$query=("SELECT * FROM lala_tshirt_rating WHERE lala_designs_id = '$id'");
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if ($row['love']=="") {$ret = 0;} else {$ret=$row['love'];}
	
	return $ret;

}





?>