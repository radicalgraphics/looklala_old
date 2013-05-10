<?php
/*
Plugin Name: Getpriceeuro

Description: returns priceeuro value on a given tshirt id design

Usage: <code>getpriceeuro($id)</code>

Returns: returns price in euro as value

Version: 1.0

Author: Radical Graphics Studios

*/

function getpriceeuro($id){

	$query=("SELECT * FROM lala_camisetas WHERE id = '$id'");
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if ($row['priceeuro']=="") {$ret = 0;} else {$ret=$row['priceeuro'];}
	
	return $ret;

}





?>