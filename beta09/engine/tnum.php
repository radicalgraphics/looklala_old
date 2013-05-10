<?php
/*
Plugin Name: Tnum

Description: returns the number of tshirts on live

Usage: <code>Tnum()</code>

Returns: returns number of tshirts on live

Version: 1.0

Author: Radical Graphics Studios

*/

function tnum(){

	$query=("SELECT * FROM lala_camisetas");
	$result=mysql_query($query);
	$num_rows = mysql_num_rows($result);

	return $num_rows;

}





?>