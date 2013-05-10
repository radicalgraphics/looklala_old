<?php
/*
Plugin Name: Getpricedollar

Description: returns price in dollars value on a given tshirt id design

Usage: <code>getpricedollar($id)</code>

Returns: returns integer as price dollar value

Version: 1.0

Author: Radical Graphics Studios

*/

function getpricedollar($id){

	$query=("SELECT * FROM lala_camisetas WHERE id = '$id'");
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if ($row['pricedollar']=="") {$ret = 0;} else {$ret=$row['pricedollar'];}
	
	return $ret;

}





?>