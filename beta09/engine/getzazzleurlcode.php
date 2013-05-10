<?php
/*
Plugin Name: Getzazzleurlcode

Description: returns zazzleurlcode value on a given tshirt id design

Usage: <code>Getzazzleurlcode($id)</code>

Returns: returns string as url value

Version: 1.0

Author: Radical Graphics Studios

*/

function getzazzleurlcode($id){

	$query=("SELECT * FROM lala_camisetas WHERE id = '$id'");
	$result=mysql_query($query);
	$row = mysql_fetch_array($result);
	
	if ($row['zazzlecodeURL']=="") {$ret = 0;} else {$ret=$row['zazzlecodeURL'];}
	
	return $ret;

}





?>